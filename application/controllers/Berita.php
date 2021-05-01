<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

  var $limit=10;
  var $offset=10;

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $this->load->model('Model_berita'); //load model model_upldgbr yang berada di folder model
        $this->load->helper(array('url')); //load helper url 
    }

    public function index($page=NULL,$offset='',$key=NULL)
    {        
        $data['qr'] = $this->Model_berita->get_allimage(); //query dari model
        
        $this->load->view('system_view/admin/berita/Home',$data); //tampilan awal ketika controller upload di akses
    }

    public function add() {
        //view yang tampil jika fungsi add diakses pada url
        $this->load->view('system_view/admin/berita/Tambah');
    }
    
    public function insert(){
        $this->load->library('upload');
        $ktp = "file_".time(); //nama file + fungsi time
        $config['upload_path'] = './uploads/berita/'; //Folder untuk menyimpan hasil upload
        $config['allowed_types'] = 'jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['filename'] = $ktp; //nama yang terupload nantinya

        $this->upload->initialize($config);
        
        if($_FILES['filefoto']['name'])
        {
            if ($this->upload->do_upload('filefoto'))
            {
                $gambar = $this->upload->data();
                $data = array(
                  'nama_gambar' =>$gambar['file_name'],
                  'judul' =>$this->input->post('judul'),
                  'sumber' =>$this->input->post('sumber'),
                  'tanggal' =>$this->input->post('tanggal'),
                  'link' =>$this->input->post('link')
                );

                $this->Model_berita->get_insert2($data); //akses model untuk menyimpan ke database
                
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Tambah data berhasil !!</div></div>");
                redirect('berita'); //jika berhasil maka akan ditampilkan view upload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal tambah data !!</div></div>");
                redirect('berita/add'); //jika gagal maka akan ditampilkan form upload
            }
        }
    }
    
    
// edit
public function edit($id)
{
    $kondisi = array('id_berita' => $id );

    $data['data'] = $this->Model_berita->get_by_id($kondisi);
    return $this->load->view('system_view/admin/berita/Edit',$data);
}

// update
public function updatedata()
{
    $id   = $this->input->post('id');
    $judul = $this->input->post('judul');
    $sumber = $this->input->post('sumber');
    $tanggal = $this->input->post('tanggal');
    $link = $this->input->post('link');

    $path = './uploads/berita/';

    $kondisi = array('id_berita' => $id );

    // get foto
    $ktp = "file_".time();
    $config['upload_path'] = './uploads/berita/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size'] = '2048';  //2MB max
    $config['max_width'] = '4480'; // pixel
    $config['max_height'] = '4480'; // pixel
    $config['file_name'] = $ktp;

    $this->upload->initialize($config);

      if (!empty($_FILES['filefoto']['name'])) {
          if ( $this->upload->do_upload('filefoto') ) {
              $gambar = $this->upload->data();
              $data = array(
                'nama_gambar'               => $gambar['file_name'],
                'judul'         => $judul,
                'sumber'        => $sumber,
                'tanggal'      => $tanggal,
                'link'    => $link,
            );
            // print_r($data);
            // print_r($id);
            // hapus foto pada direktori
            @unlink($path.$this->input->post('filelama'));
                          $this->Model_berita->update2($data,$kondisi);
            redirect('berita');
          }else {
            die("gagal update data");
          }
      }else {
        $data = array(
                'judul'         => $judul,
                'sumber'        => $sumber,
                'tanggal'       => $tanggal,
                'link'          => $link,
        );
        // print_r($data);
        // print_r($id);
        // hapus foto pada direktori
                      $this->Model_berita->update2($data,$kondisi);
        redirect('berita');
      }
}
// delete
public function deletedata($id,$gambar)
{
    $path = './uploads/berita/';
    @unlink($path.$gambar);

    $where = array('id_berita' => $id);
    $this->Model_berita->delete($where);
    return redirect('berita');
}

} // end class


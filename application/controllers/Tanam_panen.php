<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tanam_panen extends CI_Controller {

  var $limit=10;
  var $offset=10;

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $this->load->model('Model_tanam'); //load model model_upldgbr yang berada di folder model
        $this->load->helper(array('url')); //load helper url 
    }

    public function index($page = NULL, $offset = '', $key = NULL)
    {
        $data['tanam'] = $this->Model_tanam->get_allimage(); //query dari model

        $this->load->view('system_view/petani/tanam_panen/Home', $data); //tampilan awal ketika controller upload di akses
    }

    public function add()
    {
        $data['tanam'] = $this->Model_tanam->getFormTanam(); //query dari model
        $data['komo'] = $this->Model_tanam->getKomoditas(); //query dari model
        //view yang tampil jika fungsi add diakses pada url
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        // die;
        $this->load->view('system_view/petani/tanam_panen/Tambah', $data);
    }
    public function insert(){
        $this->load->library('upload');
        $gambar = "file_".time(); //nama file + fungsi time
        $config['upload_path'] = './uploads/panen/'; //Folder untuk menyimpan hasil upload
        $config['allowed_types'] = 'jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['filename'] = $gambar; //nama yang terupload nantinya

        $this->upload->initialize($config);
        
        if($_FILES['filefoto']['name'])
        {
            if ($this->upload->do_upload('filefoto'))
            {
                $gambar = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/images/'.$gambar['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 400;
                $config['height']= 400;
                $config['new_image']= './assets/images/'.$gambar['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                $data = array(
                  'gambar_panen' =>$gambar['file_name'],
                  'nama_petani' =>$this->input->post('nama_petani'),
                  'no_hp_petani' =>$this->input->post('no_hp_petani'),
                  'alamat_petani' =>$this->input->post('alamat_petani'),
                  'desa' =>$this->input->post('desa'),
                  'komoditi' =>$this->input->post('komoditi'),
                  'tanggal_tanam' =>$this->input->post('tanggal_tanam'),
                  'tanggal_panen' =>$this->input->post('tanggal_panen'),
                  'status_panen' =>$this->input->post('status_panen'),
                  'hasil_panen' =>$this->input->post('hasil_panen'),
                  'harga_panen' =>$this->input->post('harga_panen'),
                  'kondisi_panen' =>$this->input->post('kondisi_panen'),
                  'keterangan' =>$this->input->post('keterangan'),
                  'no_briva' =>$this->input->post('no_briva'),
                  'nama_bank' =>$this->input->post('nama_bank'),
                  'sebagai' =>$this->input->post('sebagai')
                  
                );

                $this->Model_tanam->get_insert2($data); //akses model untuk menyimpan ke database
                
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload gambar berhasil !!</div></div>");
                redirect('tanam_panen'); //jika berhasil maka akan ditampilkan view upload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                redirect('tanam_panen/add'); //jika gagal maka akan ditampilkan form upload
            }
        }
    }
    
    
// edit
public function edit($id)
{
    $kondisi = array('id_tanam_panen' => $id );

    $data['data'] = $this->Model_tanam->get_by_id($kondisi);
    return $this->load->view('system_view/petani/tanam_panen/Edit',$data);
}

    // update
    public function updatedata()
    {
        $id   = $this->input->post('id');
        $nama_petani = $this->input->post('nama_petani');
        $no_hp_petani = $this->input->post('no_hp_petani');
        $alamat_petani = $this->input->post('alamat_petani');
        $desa = $this->input->post('desa');
        $komoditi = $this->input->post('komoditi');
        $tanggal_tanam = $this->input->post('tanggal_tanam');
        $tanggal_panen = $this->input->post('tanggal_panen');
        $status_panen = $this->input->post('status_panen');
        $hasil_panen = $this->input->post('hasil_panen');
        $harga_panen = $this->input->post('harga_panen');
        $kondisi_panen = $this->input->post('kondisi_panen');
        $keterangan = $this->input->post('keterangan');
        $no_briva = $this->input->post('no_briva');
        $nama_bank = $this->input->post('nama_bank');
        $sebagai = $this->input->post('sebagai');
        
        $path = './uploads/panen/';

        $kondisi = array('id_tanam_panen' => $id );

        // get foto
        $gambar = "file_".time();
        $config['upload_path'] = './uploads/panen/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '2048';  //2MB max
        $config['max_width'] = '4480'; // pixel
        $config['max_height'] = '4480'; // pixel
        $config['file_name'] = $gambar;

        $this->upload->initialize($config);

      if (!empty($_FILES['filefoto']['name'])) {
          if ( $this->upload->do_upload('filefoto') ) {
              $gambar = $this->upload->data();
              //Compress Image
              $config['image_library']='gd2';
              $config['source_image']='./uploads/panen/'.$gambar['file_name'];
              $config['create_thumb']= FALSE;
              $config['maintain_ratio']= FALSE;
              $config['quality']= '50%';
              $config['width']= 400;
              $config['height']= 400;
              $config['new_image']= './uploads/panen/'.$gambar['file_name'];
              $this->load->library('image_lib', $config);
              $this->image_lib->resize();
              $data = array(
                'gambar_panen'               => $gambar['file_name'],
                'nama_petani'                => $nama_petani,
                'no_hp_petani'               => $no_hp_petani,
                'alamat_petani'              => $alamat_petani,
                'desa'                       => $desa,
                'komoditi'                   => $komoditi,
                'tanggal_tanam'              => $tanggal_tanam,
                'tanggal_panen'              => $tanggal_panen,
                'status_panen'               => $status_panen,
                'hasil_panen'                => $hasil_panen,
                'harga_panen'                => $harga_panen,
                'kondisi_panen'              => $kondisi_panen,
                'keterangan'                 => $keterangan,
                'no_briva'                   => $no_briva,
                'nama_bank'                  => $nama_bank,
                'sebagai'                    => $sebagai

                
            );
            // print_r($data);
            // print_r($id);
            // hapus foto pada direktori
            @unlink($path.$this->input->post('filelama'));
                          $this->Model_tanam->update2($data,$kondisi);
            redirect('tanam_panen');
          }else {
            die("gagal update data");
          }
        }else {
        $data = array(
                'nama_petani'                => $nama_petani,
                'no_hp_petani'               => $no_hp_petani,
                'alamat_petani'              => $alamat_petani,
                'desa'                       => $desa,
                'komoditi'                   => $komoditi,
                'tanggal_tanam'              => $tanggal_tanam,
                'tanggal_panen'              => $tanggal_panen,
                'status_panen'               => $status_panen,
                'hasil_panen'                => $hasil_panen,
                'harga_panen'                => $harga_panen,
                'kondisi_panen'              => $kondisi_panen,
                'keterangan'                 => $keterangan,
                'no_briva'                   => $no_briva,
                'nama_bank'                  => $nama_bank,
                'sebagai'                    => $sebagai
                
        );
        // print_r($data);
        // print_r($id);
        // hapus foto pada direktori
                      $this->Model_tanam->update2($data,$kondisi);
        redirect('tanam_panen');
      
}
    }
    public function hapus($id)
    {
        $path = './uploads/panen/';
        @unlink($path.$gambar);
        if($id==""){
            $this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
            redirect('tanam_panen');
        }else{
            $this->db->where('id_tanam_panen', $id);
            $this->db->delete('form_tanam_panen');
            $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
            redirect('tanam_panen');
        }
    }
// delete
public function deletedata($id,$gambar)
{
    $path = './uploads/panen/';
    @unlink($path.$gambar);

    $this->Model_tanam->delete($id);
    $this->session->set_flashdata('msg', 'Dihapus');
    redirect('padi');
    
}

} // end class


<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Komoditas extends CI_Controller
{

    var $limit = 10;
    var $offset = 10;

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $this->load->model('Model_komoditas'); //load model model_upldgbr yang berada di folder model
        $this->load->helper(array('url')); //load helper url 
    }

    public function index($page = NULL, $offset = '', $key = NULL)
    {
        $data['query'] = $this->Model_komoditas->get_allimage(); //query dari model

        $this->load->view('system_view/admin/komoditi/Home', $data); //tampilan awal ketika controller upload di akses
    }

    public function add()
    {
        //view yang tampil jika fungsi add diakses pada url
        $this->load->view('system_view/admin/komoditi/Tambah');
    }

    public function insert()
    {
        $this->load->library('upload');
        $gambar = "file_" . time(); //nama file + fungsi time
        $config['upload_path'] = './uploads/komoditas/'; //Folder untuk menyimpan hasil upload
        $config['allowed_types'] = 'jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['filename'] = $gambar; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if ($_FILES['filefoto']['name']) {
            if ($this->upload->do_upload('filefoto')) {
                $gambar = $this->upload->data();
                $data = array(
                    'gambar' => $gambar['file_name'],
                    'nama_komoditas' => $this->input->post('nama_komoditas'),
                    'nama_tanaman' => $this->input->post('nama_tanaman')

                );

                $this->Model_komoditas->get_insert2($data); //akses model untuk menyimpan ke database

                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success" role="alert"> sukses tambah data 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('komoditas'); //jika berhasil maka akan ditampilkan view upload
            } else {
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger" role="alert"> Gagal upload gambar 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('komoditas/add'); //jika gagal maka akan ditampilkan form upload
            }
        }
    }


    // edit
    public function edit($id)
    {
        $kondisi = array('id_komoditas' => $id);

        $data['data'] = $this->Model_komoditas->get_by_id($kondisi);
        return $this->load->view('system_view/admin/komoditi/Edit', $data);
    }

    // update
    public function updatedata()
    {
        $id   = $this->input->post('id');
        $nama_komoditas = $this->input->post('nama_komoditas');
        $nama_tanaman = $this->input->post('nama_tanaman');

        $path = './uploads/komoditas/';

        $kondisi = array('id_komoditas' => $id);

        // get foto
        $gambar = "file_" . time();
        $config['upload_path'] = './uploads/komoditas/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '2048';  //2MB max
        $config['max_width'] = '4480'; // pixel
        $config['max_height'] = '4480'; // pixel
        $config['file_name'] = $gambar;

        $this->upload->initialize($config);

        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $gambar = $this->upload->data();
                $data = array(
                    'gambar'               => $gambar['file_name'],
                    'nama_komoditas'       => $nama_komoditas,
                    'nama_tanaman'         => $nama_tanaman
                );
                // print_r($data);
                // print_r($id);
                // hapus foto pada direktori
                @unlink($path . $this->input->post('filelama'));
                $this->Model_komoditas->update2($data, $kondisi);
                redirect('komoditas');
            } else {
                die("gagal update data");
            }
        } else {
            $data = array(
                'nama_komoditas'   => $nama_komoditas,
                'nama_tanaman'     => $nama_tanaman
            );
            // print_r($data);
            // print_r($id);
            // hapus foto pada direktori
            $this->Model_komoditas->update2($data, $kondisi);
            redirect('komoditas');
        }
    }
    // delete
    public function deletedata($id, $gambar)
    {
        $path = './uploads/komoditas/';
        @unlink($path . $gambar);

        $where = array('id_komoditas' => $id);
        $this->Model_komoditas->delete($where);
        return redirect('komoditas');
    }
} // end class

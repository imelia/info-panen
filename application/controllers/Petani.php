<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petani extends CI_Controller
{

    var $limit = 10;
    var $offset = 10;

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $this->load->model('Model_petani'); //load model model_upldgbr yang berada di folder model
        $this->load->helper(array('url')); //load helper url 
    }

    public function index($page = NULL, $offset = '', $key = NULL)
    {
        $id_anggota = $this->db->get_where('login_anggota', ['username' => $this->session->userdata('username')])->row_array();
        $data['query'] = $this->Model_petani->getDataPetaniJoinLoginAnggota($id_anggota['id_anggota']); //query dari model
        // echo '<pre>';
        // print_r($data['query']);
        // die;
        // echo '</pre>';
        $this->load->view('system_view/petani/data/Home', $data); //tampilan awal ketika controller upload di akses
    }

    public function add()
    {
        //view yang tampil jika fungsi add diakses pada url
        $this->load->view('system_view/petani/data/Tambah');
    }

    public function insert()
    {
        $id_anggota = $this->db->get_where('login_anggota', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->library('upload');
        $ktp = "file_" . time(); //nama file + fungsi time
        $config['upload_path'] = './uploads/ktp/'; //Folder untuk menyimpan hasil upload
        $config['allowed_types'] = 'jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['filename'] = $ktp; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if ($_FILES['filefoto']['name']) {
            if ($this->upload->do_upload('filefoto')) {
                $gambar = $this->upload->data();
                $data = array(
                    'ktp' => $gambar['file_name'],
                    'komoditas' => $this->input->post('komoditas'),
                    'luas_sawah' => $this->input->post('luas_sawah'),
                    'alamat_sawah' => $this->input->post('alamat_sawah'),
                    'desa_kelurahan' => $this->input->post('desa_kelurahan'),
                    'id_anggota' => $id_anggota['id_anggota'],
                );
                // echo '<pre>';
                // print_r($data);
                // echo '</pre>';
                // die;
                $this->Model_petani->get_insert2($data); //akses model untuk menyimpan ke database

                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Tambah data berhasil !!</div></div>");
                redirect('petani'); //jika berhasil maka akan ditampilkan view upload
            } else {
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal tambah data !!</div></div>");
                redirect('petani/add'); //jika gagal maka akan ditampilkan form upload
            }
        }
    }


    // edit
    public function edit($id)
    {
        $kondisi = array('id_daftar_petani' => $id);

        $data['data'] = $this->Model_petani->get_by_id($kondisi);
        return $this->load->view('system_view/petani/data/Edit', $data);
    }

    // update
    public function updatedata()
    {
        $id   = $this->input->post('id');
        $komoditas = $this->input->post('komoditas');
        $luas_sawah = $this->input->post('luas_sawah');
        $alamat_sawah = $this->input->post('alamat_sawah');
        $desa_kelurahan = $this->input->post('desa_kelurahan');

        $path = './uploads/ktp/';

        $kondisi = array('id_daftar_petani' => $id);

        // get foto
        $ktp = "file_" . time();
        $config['upload_path'] = './uploads/ktp/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '2048';  //2MB max
        $config['max_width'] = '4480'; // pixel
        $config['max_height'] = '4480'; // pixel
        $config['file_name'] = $ktp;

        $this->upload->initialize($config);

        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $gambar = $this->upload->data();
                $data = array(
                    'ktp'               => $gambar['file_name'],
                    'komoditas'         => $komoditas,
                    'luas_sawah'        => $luas_sawah,
                    'alamat_sawah'      => $alamat_sawah,
                    'desa_kelurahan'    => $desa_kelurahan,
                );
                // print_r($data);
                // print_r($id);
                // hapus foto pada direktori
                @unlink($path . $this->input->post('filelama'));
                $this->Model_petani->update2($data, $kondisi);
                redirect('petani');
            } else {
                die("gagal update data");
            }
        } else {
            $data = array(
                'komoditas'         => $komoditas,
                'luas_sawah'        => $luas_sawah,
                'alamat_sawah'      => $alamat_sawah,
                'desa_kelurahan'    => $desa_kelurahan,
            );
            // print_r($data);
            // print_r($id);
            // hapus foto pada direktori
            $this->Model_petani->update2($data, $kondisi);
            redirect('petani');
        }
    }
    // delete
    public function deletedata($id, $gambar)
    {
        $path = './uploads/ktp/';
        @unlink($path . $gambar);

        $where = array('id_daftar_petani' => $id);
        $this->Model_petani->delete($where);
        return redirect('petani');
    }
} // end class

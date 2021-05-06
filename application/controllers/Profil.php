<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('username')) {
      redirect('auth');
    }
    $this->load->model('Model_profil'); //load model model_upldgbr yang berada di folder model
  }

  // update
  public function updatedata()
  {
    $id   = $this->input->post('id');
    $nama_petani = $this->input->post('nama_petani');
    $alamat_petani = $this->input->post('alamat_petani');
    $no_hp_petani = $this->input->post('no_hp_petani');
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
          'nama_petani'       => $nama_petani,
          'alamat_petani'     => $alamat_petani,
          'no_hp_petani'      => $no_hp_petani,
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
        'nama_petani'       => $nama_petani,
        'alamat_petani'     => $alamat_petani,
        'no_hp_petani'      => $no_hp_petani,
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
}

<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $this->load->model('Model_komoditas'); //load model yang berada di folder model
        $this->load->model('Model_berita'); //load modelyang berada di folder model
        $this->load->model('Model_tanam'); //load model yang berada di folder model
        $this->load->model('Model_harga'); //load model yang berada di folder model
        $this->load->model('Model_beranda'); //load model yang berada di folder model
        $this->load->model('Model_buah'); //load model yang berada di folder model
        $this->load->model('Model_biofarmaka'); //load model yang berada di folder model
        $this->load->model('Model_sayur'); //load model yang berada di folder model
        $this->load->model('Model_padi'); //load model yang berada di folder model
        $this->load->model('Model_dash_admin', 'mda');
        $this->load->helper(array('url')); //load helper url 
    }

    public function index($page = NULL, $offset = '', $key = NULL)
    {
        $data['biochart'] = $this->mda->graph_biofarmaka();
        $data['buahchart'] = $this->mda->graph_buah();
        $data['padipal'] = $this->mda->graph_padipalawija();
        $data['sayur'] = $this->mda->graph_sayuran();
        $data['show_caro'] = $this->Model_beranda->show_carousel();
        $data['query'] = $this->Model_komoditas->get_allimage(); //query dari model
        $id_anggota = $this->db->get_where('login_anggota', ['username' => $this->session->userdata('username')])->row_array();
        $data['tanam'] = $this->Model_tanam->get_allimage($id_anggota['id_anggota']); //query dari model
        $data['qr'] = $this->Model_berita->get_allimage(); //query dari model

        $wilayah = $this->input->post('wilayah');
        $data['wilayah'] = $this->Model_beranda->komoditi_wilayah($wilayah);
        $data['desa'] = $this->Model_beranda->getAllDesa();

        $nama_komo = $this->input->post('nama_komoditas');
        $data['komoditas'] = $this->Model_beranda->getSpecifyKomoditi($nama_komo);
        $data['Allkomoditas'] = $this->Model_beranda->getAllKomoditi();

        $data['harga'] = $this->Model_harga->getAllHarga();

        $komoditi = $this->input->post('komoditi');
        $data['produk'] = $this->Model_beranda->getFormTanamSpecify($komoditi);
        $data['Allproduk'] = $this->Model_beranda->getFormTanam();

        $data['countPetani'] = $this->Model_tanam->getCountPetani();
        $data['countPembeli'] = $this->Model_tanam->getCountPembeli();
        $data['countTransaksi'] = $this->Model_tanam->getCountTransaksi();
        $this->load->view('system_view/beranda', $data); //tampilan awal ketika controller upload di akses
    }
    public function komoditi_wilayah()
    {
        $this->form_validation->set_rules('wilayah', 'Wilayah', 'trim');
        if ($this->form_validation->run() == true) {
            $data['biochart'] = $this->mda->graph_biofarmaka();
            $data['buahchart'] = $this->mda->graph_buah();
            $data['padipal'] = $this->mda->graph_padipalawija();
            $data['sayur'] = $this->mda->graph_sayuran();
            $data['show_caro'] = $this->Model_beranda->show_carousel();
            $data['query'] = $this->Model_komoditas->get_allimage(); //query dari model
            $id_anggota = $this->db->get_where('login_anggota', ['username' => $this->session->userdata('username')])->row_array();
            $data['tanam'] = $this->Model_tanam->get_allimage($id_anggota['id_anggota']); //query dari model
            $data['qr'] = $this->Model_berita->get_allimage(); //query dari model

            $wilayah = $this->input->post('wilayah');
            $data['wilayah'] = $this->Model_beranda->komoditi_wilayah($wilayah);
            $data['desa'] = $this->Model_beranda->getAllDesa();

            $nama_komo = $this->input->post('nama_komoditas');
            $data['komoditas'] = $this->Model_beranda->getSpecifyKomoditi($nama_komo);
            $data['Allkomoditas'] = $this->Model_beranda->getAllKomoditi();

            $data['harga'] = $this->Model_harga->getAllHarga();

            $komoditi = $this->input->post('komoditi');
            $data['produk'] = $this->Model_beranda->getFormTanamSpecify($komoditi);
            $data['Allproduk'] = $this->Model_beranda->getFormTanam();
            $this->load->view('system_view/beranda', $data);
        }
    }

    public function komoditas_specify()
    {
        $this->form_validation->set_rules('nama_komoditas', 'Nama Komoditas', 'trim');
        if ($this->form_validation->run() == true) {
            $data['biochart'] = $this->mda->graph_biofarmaka();
            $data['buahchart'] = $this->mda->graph_buah();
            $data['padipal'] = $this->mda->graph_padipalawija();
            $data['sayur'] = $this->mda->graph_sayuran();
            $data['show_caro'] = $this->Model_beranda->show_carousel();
            $data['query'] = $this->Model_komoditas->get_allimage(); //query dari model
            $id_anggota = $this->db->get_where('login_anggota', ['username' => $this->session->userdata('username')])->row_array();
            $data['tanam'] = $this->Model_tanam->get_allimage($id_anggota['id_anggota']); //query dari model
            $data['qr'] = $this->Model_berita->get_allimage(); //query dari model

            $wilayah = $this->input->post('wilayah');
            $data['wilayah'] = $this->Model_beranda->komoditi_wilayah($wilayah);
            $data['desa'] = $this->Model_beranda->getAllDesa();

            $nama_komo = $this->input->post('nama_komoditas');
            $data['komoditas'] = $this->Model_beranda->getSpecifyKomoditi($nama_komo);
            $data['Allkomoditas'] = $this->Model_beranda->getAllKomoditi();

            $data['harga'] = $this->Model_harga->getAllHarga();

            $komoditi = $this->input->post('komoditi');
            $data['produk'] = $this->Model_beranda->getFormTanamSpecify($komoditi);
            $data['Allproduk'] = $this->Model_beranda->getFormTanam();
            $this->load->view('system_view/beranda', $data);
        }
    }

    public function produk_komoditas()
    {
        $this->form_validation->set_rules('komoditi', 'Komoditi', 'trim');

        if ($this->form_validation->run() == true) {
            $data['biochart'] = $this->mda->graph_biofarmaka();
            $data['buahchart'] = $this->mda->graph_buah();
            $data['padipal'] = $this->mda->graph_padipalawija();
            $data['sayur'] = $this->mda->graph_sayuran();
            $data['show_caro'] = $this->Model_beranda->show_carousel();
            $data['query'] = $this->Model_komoditas->get_allimage(); //query dari model

            $id_anggota = $this->db->get_where('login_anggota', ['username' => $this->session->userdata('username')])->row_array();
            $data['tanam'] = $this->Model_tanam->get_allimage($id_anggota['id_anggota']); //query dari model
            $data['qr'] = $this->Model_berita->get_allimage(); //query dari model

            $wilayah = $this->input->post('wilayah');
            $data['wilayah'] = $this->Model_beranda->komoditi_wilayah($wilayah);
            $data['desa'] = $this->Model_beranda->getAllDesa();

            $nama_komo = $this->input->post('nama_komoditas');
            $data['komoditas'] = $this->Model_beranda->getSpecifyKomoditi($nama_komo);
            $data['Allkomoditas'] = $this->Model_beranda->getAllKomoditi();

            $data['harga'] = $this->Model_harga->getAllHarga();

            $komoditi = $this->input->post('komoditi');
            $data['produk'] = $this->Model_beranda->getFormTanamSpecify($komoditi);
            $data['Allproduk'] = $this->Model_beranda->getFormTanam();
            $this->load->view('system_view/beranda', $data);
        }
    }
}

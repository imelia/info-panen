<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Beranda2 extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $this->load->model('Model_komoditas'); //load model model_upldgbr yang berada di folder model
        $this->load->model('Model_berita'); //load model model_upldgbr yang berada di folder model
        $this->load->model('Model_tanam'); //load model model_upldgbr yang berada di folder model
        $this->load->model('Model_beranda'); //load model model_upldgbr yang berada di folder model
        $this->load->model('Model_buah'); //load model model_upldgbr yang berada di folder model
        $this->load->model('Model_biofarmaka'); //load model model_upldgbr yang berada di folder model
        $this->load->model('Model_sayur'); //load model model_upldgbr yang berada di folder model
        $this->load->model('Model_padi'); //load model model_upldgbr yang berada di folder model
        $this->load->model('Model_dash_admin', 'mda');
        $this->load->helper(array('url')); //load helper url 
    }

    public function index($page = NULL, $offset = '', $key = NULL)
    {
        $data['show_caro'] = $this->Model_beranda->show_carousel();
        $data['query'] = $this->Model_komoditas->get_allimage(); //query dari model

        $data['tanam'] = $this->Model_tanam->get_dataShop(); //query dari model

        $id_anggota = $this->db->get_where('login_anggota', ['username' => $this->session->userdata('username')])->row_array();
        $data['tanam'] = $this->Model_tanam->get_allimage($id_anggota['id_anggota']); //query dari model

        $data['qr'] = $this->Model_berita->get_allimage(); //query dari model

        $data['bua'] = $this->Model_buah->getAllBuah();
        $data['bf'] = $this->Model_biofarmaka->getAllBiofarmaka();
        $data['pd'] = $this->Model_padi->getAllPadi();
        $data['syr'] = $this->Model_sayur->getAllSayur();

        $wilayah = $this->input->post('wilayah');
        $data['wilayah'] = $this->Model_beranda->komoditi_wilayah($wilayah);
        $data['desa'] = $this->Model_beranda->getAllDesa();

        $nama_komo = $this->input->post('nama_komoditas');
        $data['komoditas'] = $this->Model_beranda->getSpecifyKomoditi($nama_komo);
        $data['Allkomoditas'] = $this->Model_beranda->getAllKomoditi();

        $komoditi = $this->input->post('komoditi');
        $data['produk'] = $this->Model_beranda->getFormTanamSpecify($komoditi);
        $data['Allproduk'] = $this->Model_beranda->getFormTanam();
        $this->load->view('system_view/beranda2', $data); //tampilan awal ketika controller upload di akses
    }
    public function komoditi_wilayah()
    {
        $this->form_validation->set_rules('wilayah', 'Wilayah', 'trim');
        if ($this->form_validation->run() == true) {
            $data['show_caro'] = $this->Model_beranda->show_carousel();
            $data['query'] = $this->Model_komoditas->get_allimage(); //query dari model
            $data['tanam'] = $this->Model_tanam->get_dataShop(); //query dari model
            $data['qr'] = $this->Model_berita->get_allimage(); //query dari model

            $data['bua'] = $this->Model_buah->getAllBuah();
            $data['bf'] = $this->Model_biofarmaka->getAllBiofarmaka();
            $data['pd'] = $this->Model_padi->getAllPadi();
            $data['syr'] = $this->Model_sayur->getAllSayur();

            $wilayah = $this->input->post('wilayah');
            $data['wilayah'] = $this->Model_beranda->komoditi_wilayah($wilayah);
            $data['desa'] = $this->Model_beranda->getAllDesa();

            $nama_komo = $this->input->post('nama_komoditas');
            $data['komoditas'] = $this->Model_beranda->getSpecifyKomoditi($nama_komo);
            $data['Allkomoditas'] = $this->Model_beranda->getAllKomoditi();

            $komoditi = $this->input->post('komoditi');
            $data['produk'] = $this->Model_beranda->getFormTanamSpecify($komoditi);
            $data['Allproduk'] = $this->Model_beranda->getFormTanam();
            $this->load->view('system_view/beranda2', $data);
        }
    }

    public function komoditas_specify()
    {
        $this->form_validation->set_rules('nama_komoditas', 'Nama Komoditas', 'trim');
        if ($this->form_validation->run() == true) {
            $data['show_caro'] = $this->Model_beranda->show_carousel();
            $data['query'] = $this->Model_komoditas->get_allimage(); //query dari model
            $data['tanam'] = $this->Model_tanam->get_dataShop(); //query dari model
            $data['qr'] = $this->Model_berita->get_allimage(); //query dari model

            $data['bua'] = $this->Model_buah->getAllBuah();
            $data['bf'] = $this->Model_biofarmaka->getAllBiofarmaka();
            $data['pd'] = $this->Model_padi->getAllPadi();
            $data['syr'] = $this->Model_sayur->getAllSayur();

            $wilayah = $this->input->post('wilayah');
            $data['wilayah'] = $this->Model_beranda->komoditi_wilayah($wilayah);
            $data['desa'] = $this->Model_beranda->getAllDesa();

            $nama_komo = $this->input->post('nama_komoditas');
            $data['komoditas'] = $this->Model_beranda->getSpecifyKomoditi($nama_komo);
            $data['Allkomoditas'] = $this->Model_beranda->getAllKomoditi();

            $komoditi = $this->input->post('komoditi');
            $data['produk'] = $this->Model_beranda->getFormTanamSpecify($komoditi);
            $data['Allproduk'] = $this->Model_beranda->getFormTanam();
            $this->load->view('system_view/beranda2', $data);
        }
    }

    public function produk_komoditas()
    {
        $this->form_validation->set_rules('komoditi', 'Komoditi', 'trim');

        if ($this->form_validation->run() == true) {
            $data['show_caro'] = $this->Model_beranda->show_carousel();
            $data['query'] = $this->Model_komoditas->get_allimage(); //query dari model
            $data['tanam'] = $this->Model_tanam->get_dataShop(); //query dari model
            $data['qr'] = $this->Model_berita->get_allimage(); //query dari model

            $data['bua'] = $this->Model_buah->getAllBuah();
            $data['bf'] = $this->Model_biofarmaka->getAllBiofarmaka();
            $data['pd'] = $this->Model_padi->getAllPadi();
            $data['syr'] = $this->Model_sayur->getAllSayur();

            $wilayah = $this->input->post('wilayah');
            $data['wilayah'] = $this->Model_beranda->komoditi_wilayah($wilayah);
            $data['desa'] = $this->Model_beranda->getAllDesa();

            $nama_komo = $this->input->post('nama_komoditas');
            $data['komoditas'] = $this->Model_beranda->getSpecifyKomoditi($nama_komo);
            $data['Allkomoditas'] = $this->Model_beranda->getAllKomoditi();

            $komoditi = $this->input->post('komoditi');
            $data['produk'] = $this->Model_beranda->getFormTanamSpecify($komoditi);
            $data['Allproduk'] = $this->Model_beranda->getFormTanam();
            $this->load->view('system_view/beranda2', $data);
        }
    }
}

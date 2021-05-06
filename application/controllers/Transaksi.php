<?php
class Transaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $this->load->helper(array('url')); //load helper url 
        $this->load->library('session');
        $this->load->model('Model_riwayat_pesan'); //load model model_upldgbr yang berada di folder model
    }
    public function index()
    {
        $data['query'] = $this->Model_riwayat_pesan->getAllHeaderTransaksi(); //query dari model

        $this->load->view('system_view/admin/transaksi/Home', $data); //tampilan awal ketika controller upload di akses
    }
}

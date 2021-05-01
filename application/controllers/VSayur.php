<?php 
class VSayur extends CI_Controller{
    
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        
        $this->load->model('Model_sayur');
        $this->load->library('form_validation');
    }
    public function index()
    {   
        $data['title'] = 'Halaman Tanaman Sayur';
        $data['sayur'] = $this->Model_sayur->getAllSayur();
        
        $this->load->view('pembeli/rekap/info_sayur',$data);
    }
}
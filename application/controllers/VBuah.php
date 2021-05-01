<?php 
class VBuah extends CI_Controller{
    
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $this->load->model('Model_buah');
        $this->load->library('form_validation');
    }
    public function index()
    {   
        $data['title'] = 'Halaman Tanaman Buah';
        $data['buah'] = $this->Model_buah->getAllBuah();
        
        $this->load->view('pembeli/rekap/info_buah',$data);
    }
}
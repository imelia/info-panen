<?php 
class VBiofarmaka extends CI_Controller{
    
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $this->load->model('Model_biofarmaka');
        $this->load->library('form_validation');
    }
    public function index()
    {   
        $data['title'] = 'Halaman Tanaman Biofarmaka';
        $data['biofarmaka'] = $this->Model_biofarmaka->getAllBiofarmaka();
        
        $this->load->view('pembeli/rekap/info_biofarmaka',$data);
    }
}
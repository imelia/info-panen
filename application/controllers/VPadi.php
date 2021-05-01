<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VPadi extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $this->load->model('Model_padi');
        $this->load->library('form_validation');
    }
    public function index()
    {   
        $data['title'] = 'Halaman Tanaman Padi Palawija';
        $data['padi'] = $this->Model_padi->getAllPadi();
        
        $this->load->view('pembeli/rekap/info_padi',$data);
    }
}
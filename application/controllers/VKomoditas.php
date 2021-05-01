<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VKomoditas extends CI_Controller {
	public function __construct() {
        
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $this->load->model('Model_komoditas'); //load model model_upldgbr yang berada di folder model
        $this->load->helper(array('url')); //load helper url 
    }

    public function index($page=NULL,$offset='',$key=NULL)
    {        
        $data['query'] = $this->Model_komoditas->get_allimage(); //query dari model
        
        $this->load->view('pembeli/komoditas',$data); //tampilan awal ketika controller upload di akses
    }
}
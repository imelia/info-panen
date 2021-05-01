<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pembeli extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $this->load->helper(array('url')); //load helper url 
    }

    public function index($page = NULL, $offset = '', $key = NULL)
    {
        $this->load->view('pembeli/home'); //tampilan awal ketika controller upload di akses
    }
}

<?php
Class Fungsi  {
    protected $ci;

     function __construct() {
        $this->ci =& get_instance();
    }

    function user_login(){
        $this->ci->load->model('Model_users');
        $id_anggota = $this->ci->session->userdata('id_anggota');
        $user_data = $this->ci->Model_users->get($id_anggota)->row();
        return $user_data;
    }
}
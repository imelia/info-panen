<?php
Class Detail  {
    protected $ci;

     function __construct() {
        $this->ci =& get_instance();
    }

    function detail_i(){
        $this->ci->load->model('Model_tanam');
        $id_tanam_panen = $this->ci->session->userdata('id_tanam_panen');
        $user_data = $this->ci->Model_tanam->get($id_tanam_panen)->row();
        return $user_data;
    }
}
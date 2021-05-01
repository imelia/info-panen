<?php

class Model_profil extends CI_model{
    var $tabel = 'login_anggota';

    function __construct() {
        parent::__construct();
    }

    public function get_member_by_id($id){
        return $this->db->get_where('login_anggota', array('id_anggota' => $id))->row();
    }

}
<?php

class Model_register extends CI_model{

    public function getAllRegister(){
        return $this->db->get('login_anggota')->result_array();
    }

    public function getAllRegisterById($id){
        $options=array('id_anggota'=>$id);
        $query = $this->db->get_where('login_anggota',$options);
        $ret = $query->row();
        return $ret;
    }
    public function get($id = null)
    {
        $this->db->from('login_anggota');
        if($id != null) {
            $this->db->where('id_anggota', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function add($post)
    {
        $params['username'] = $post['username'];
        $params['password'] = $post['password'];
        $params['id_akses'] = $post['id_akses'];

        $this->db->insert('login_anggota', $params);
    }
    function getAll(){
        $this->db->select('*');
        $this->db->from('login_anggota');
        $this->db->join('akses', 'login_anggota.id_akses = akses.id_akses');
        $query = $this->db->get();
        return $query;
      }
}
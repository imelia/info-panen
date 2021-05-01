<?php

class Model_anggota extends CI_model{

    public function getAllAnggota(){
        return $this->db->get('login_anggota')->result_array();
    }

    public function getAllAnggotaById($id){
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
    function get_sub_kecamatan($id_kecamatan){
        $query = $this->db->get_where('kecamatan', array('id_kecamatan' => $id_kecamatan));
        return $query;
    }
    public function add($post)
    {
        $params['username'] = $post['username'];
        $params['password'] = $post['password'];
        $params['id_akses'] = $post['id_akses'];

        $this->db->insert('login_anggota', $params);
    }

    
        public function edit($post)
    {
        $params['username'] = $post['username'];
        $params['password'] = $post['password'];
        $params['akses'] = $post['akses'];

        $this->db->where('id_anggota', $post['id_anggota']);
        $this->db->update('login_anggota', $params);
    }
    

    public function hapus($id)
    {
        $this->db->where('id_anggota', $id);
        $this->db->delete('login_anggota');
    }

}
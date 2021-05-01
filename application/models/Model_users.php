<?php
class Model_users extends CI_Model{

    function getAll(){
    $this->db->select('*');
    $this->db->from('login_anggota');
    $this->db->join('akses', 'login_anggota.id_akses = akses.id_akses');
    $query = $this->db->get();
    return $query;
  }
  function proseslogin($username, $password)
  {
    $this->db->where('username',$username);
    $this->db->where('password',$password);
    return $this->db->get('login_anggota')->row();
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
}
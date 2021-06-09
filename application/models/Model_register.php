<?php

class Model_register extends CI_model
{

    public function getAllRegister()
    {
        return $this->db->get('login_anggota')->result_array();
    }
    public function getAllPetani()
    {
        $query = "SELECT * FROM data_daftar_petani
                    JOIN login_anggota ON data_daftar_petani.id_anggota = login_anggota.id_anggota";
        return $this->db->query($query)->result();
    }
    public function getAllRegisterById($id)
    {
        $options = array('id_anggota' => $id);
        $query = $this->db->get_where('login_anggota', $options);
        $ret = $query->row();
        return $ret;
    }
    public function get($id = null)
    {
        $this->db->from('login_anggota');
        if ($id != null) {
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
        $params['no_telp'] = $post['no_telp'];
        $params['alamat'] = $post['alamat'];
        $params['no_rekening'] = $post['no_rekening'];
        $params['nama_bank'] = $post['nama_bank'];
        $params['atas_nama'] = $post['atas_nama'];
        $params['image'] = 'default.png';
        $params['date_created'] = time();

        $this->db->insert('login_anggota', $params);
    }

    function getAll()
    {
        $this->db->select('*');
        $this->db->from('login_anggota');
        $this->db->join('akses', 'login_anggota.id_akses = akses.id_akses');
        $query = $this->db->get();
        return $query;
    }
}

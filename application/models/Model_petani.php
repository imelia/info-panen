<?php
class Model_petani extends CI_Model
{


    var $tabel = 'data_daftar_petani';

    function __construct()
    {
        parent::__construct();
    }
    //fungsi untuk menampilkan semua data dari tabel database untuk buku
    function get_allimage($id_anggota)
    {
        $this->db->from($this->tabel);
        $this->db->where('id_anggota', $id_anggota);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_del($where, $table)
    //Query mengahapus berdasarkan id pada tabel order di dabatase dan ini untuk user
    {
        $this->db->where($where);

        $this->db->delete($table);
    }

    public function get_by_id($kondisi)
    //Query mengeupdate atau meng-edit berdasarkan idnya
    {
        $this->db->from('data_daftar_petani');
        $this->db->where($kondisi);
        $query = $this->db->get();
        return $query->row();
    }
    function get_insert2($data)
    //Query untuk memasukkan data ke dalam database untuk admin
    {
        $this->db->insert('data_daftar_petani', $data);
        return TRUE;
    }

    public function update2($data, $kondisi)
    //Query untuk mengupdate data berdasarkan kondisi yaitu get_by_id
    {
        $this->db->update('data_daftar_petani', $data, $kondisi);
        return TRUE;
    }

    public function updateAnggota($data, $kondisi)
    //Query untuk mengupdate data berdasarkan kondisi yaitu get_by_id
    {
        $this->db->update('login_anggota', $data, $kondisi);
        return TRUE;
    }

    public function delete($where)
    //Query untuk menghapus berdasarkan id 
    {
        $this->db->where($where);
        $this->db->delete('data_daftar_petani');
        return TRUE;
    }
}

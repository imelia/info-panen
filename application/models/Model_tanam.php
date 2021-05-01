<?php
class Model_tanam extends CI_Model
{
    var $tabel = 'form_tanam_panen';

    function __construct()
    {
        parent::__construct();
    }
    //fungsi untuk menampilkan semua data dari tabel database
    function get_allimage()
    {
        $this->db->from($this->tabel);
        $query = $this->db->get();
        return $query->result();
    }

    public function getFormTanam()
    {
        $query = $this->db->get('kecamatan');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

    public function getKomoditas()
    {
        $query = $this->db->get('komoditas');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
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
        $this->db->from('form_tanam_panen');
        $this->db->where($kondisi);
        $query = $this->db->get();
        return $query->row();
    }
    function get_insert2($data)
    //Query untuk memasukkan data ke dalam database untuk admin
    {
        $this->db->insert('form_tanam_panen', $data);
        return TRUE;
    }
    public function update2($data, $kondisi)
    //Query untuk mengupdate data berdasarkan kondisi yaitu get_by_id
    {
        $this->db->update('form_tanam_panen', $data, $kondisi);
        return TRUE;
    }

    public function delete($where)
    //Query untuk menghapus berdasarkan id 
    {
        $this->db->where($where);
        $this->db->delete('form_tanam_panen');
        return TRUE;
    }
    public function get_detail()
    {
        $this->db->where('id_tanam_panen');
        $query = $this->db->get('form_tanam_panen');
        return $query->row_array();
    }
    public function find($id)
    {
        $result = $this->db->where('id_tanam_panen', $id)
            ->limit(1)
            ->get($this->tabel);
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function pembeli($id_anggota)
    {
        $this->db->select('*');
        $this->db->from('header_transaksi');
        $this->db->where('header_transaksi.id_anggota', $id_anggota);
        // JOIN
        $this->db->join('transaksi', 'transaksi.id_anggota = header_transaksi.id_anggota', 'left');
        // END JOIN
        $this->db->group_by('header_transaksi.jumlah_transaksi');
        $this->db->order_by('id_header_transaksi', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function pembeli_t($jum_trans)
    {
        $this->db->select('transaksi.*,header_transaksi.*, SUM(transaksi.harga) AS total_item');
        $this->db->from('transaksi');
        $this->db->where('transaksi.total_harga', $jum_trans);
        // JOIN
        $this->db->join('header_transaksi', 'header_transaksi.id_anggota = transaksi.id_anggota');
        // END JOIN
        $this->db->group_by('transaksi.id_transaksi');
        $this->db->order_by('id_transaksi', 'asc');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function id_header_transaksi($id_header_transaksi)
    {
        $this->db->select('*');
        $this->db->from('header_transaksi');
        $this->db->where('id_header_transaksi', $id_header_transaksi);
        $this->db->order_by('id_header_transaksi', 'desc');
        $query = $this->db->get();
        return $query->row();
    }

    public function getAllTransaksi($id_anggota)
    {
        $this->db->select('*');
        $this->db->from('header_transaksi');
        $this->db->where('header_transaksi.id_anggota', $id_anggota);
        // JOIN
        $this->db->join('transaksi', 'transaksi.id_anggota = header_transaksi.id_anggota', 'left');
        // END JOIN
        $this->db->group_by('header_transaksi.id_header_transaksi');
        $this->db->order_by('id_header_transaksi', 'asc');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getRekeningfromTanamPanen()
    {
        $data = $this->db->query("SELECT * FROM form_tanam_panen GROUP BY nama_petani");
        return $data->result();
    }



    // public function sudah_login()
    // {
    //     $this->db->select('*');
    //     $this->db->from('login_anggota');
    //     $this->db->order_by('id_anggota', 'desc');
    //     $query = $this->db->get();
    //     return $query->row();
    // }
}

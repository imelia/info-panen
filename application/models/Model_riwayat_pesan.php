<?php
class Model_riwayat_pesan extends CI_Model
{
    public function getAllHeaderTransaksi()
    {
        $this->db->select('*');
        $this->db->from('header_transaksi');
        $this->db->order_by('id_header_transaksi', 'asc');
        $query = $this->db->get();
        return $query->result();
    }
    public function id_header_transaksi($id_penjual)
    {
        $this->db->select('*');
        $this->db->from('header_transaksi');
        $this->db->where('id_penjual', $id_penjual);
        $this->db->order_by('id_header_transaksi', 'asc');
        $query = $this->db->get();
        return $query->result();
    }

    public function id_header_transaksi_update($id_header_transaksi)
    {
        $this->db->select('*');
        $this->db->from('header_transaksi');
        $this->db->where('id_header_transaksi', $id_header_transaksi);
        $this->db->order_by('id_header_transaksi', 'asc');
        $query = $this->db->get();
        return $query->row();
    }
}

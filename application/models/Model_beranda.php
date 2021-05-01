<?php
class Model_beranda extends CI_Model
{
    public function getAllDesa()
    {
        $data = $this->db->query("SELECT * FROM form_tanam_panen");
        return $data->result();
    }
    public function komoditi_wilayah($wilayah)
    {
        $data = $this->db->query("SELECT * FROM form_tanam_panen WHERE desa = '$wilayah'");
        return $data->result();
    }
    public function getAllKomoditi()
    {
        $data = $this->db->query("SELECT * FROM komoditas");
        return $data->result();
    }
    public function getSpecifyKomoditi($nama_komo)
    {
        $data = $this->db->query("SELECT * FROM komoditas WHERE nama_komoditas = '$nama_komo'");
        return $data->result();
    }
    public function getFormTanam()
    {
        $data = $this->db->query("SELECT * FROM form_tanam_panen");
        return $data->result();
    }
    public function getFormTanamSpecify($komoditi)
    {
        $data = $this->db->query("SELECT * FROM form_tanam_panen WHERE komoditi = '$komoditi'");
        return $data->result();
    }
    public function show_carousel()
    {
        $data = $this->db->query("SELECT * FROM header_transaksi");
        return $data->result();
    }
}

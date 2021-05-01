<?php
class Model_dash_admin extends CI_Model
{
    public function graph_biofarmaka()
    {
        $data = $this->db->query("Select * from tanaman_biofarmaka");
        return $data->result();
    }
    public function graph_buah()
    {
        $data = $this->db->query("Select * from tanaman_buah");
        return $data->result();
    }
    public function graph_padipalawija()
    {
        $data = $this->db->query("Select * from tanaman_padi_palawija");
        return $data->result();
    }
    public function graph_sayuran()
    {
        $data = $this->db->query("Select * from tanaman_sayuran");
        return $data->result();
    }

    public function getRekening()
    {
        $data = $this->db->query("Select * from rekening");
        return $data->result();
    }

    public function getRowRekening($id_rekening)
    {
        $this->db->select('*');
        $this->db->from('rekening');
        $this->db->where('id_rekening', $id_rekening);
        $this->db->order_by('id_rekening', 'asc');
        $query = $this->db->get();
        return $query->row();
    }
}

<?php

class Model_biofarmaka extends CI_model
{

    public function getAllBiofarmaka()
    {
        return $this->db->get('tanaman_biofarmaka')->result_array();
    }

    public function getAllBiofarmakaById($id)
    {
        $options = array('id_tbiofarmaka' => $id);
        $query = $this->db->get_where('tanaman_biofarmaka', $options);
        $ret = $query->row();
        return $ret;
    }
    public function get($id = null)
    {
        $this->db->from('tanaman_biofarmaka');
        if ($id != null) {
            $this->db->where('id_tbiofarmaka', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params['komoditi_biofarmaka'] = $post['komoditi_biofarmaka'];
        $params['luas_panen'] = $post['luas_panen'];
        $params['luas_tanam'] = $post['luas_tanam'];
        $params['provitas'] = $post['provitas'];
        $params['produksi_biofarmaka'] = $post['produksi_biofarmaka'];
        $params['harga_biofarmaka'] = $post['harga_biofarmaka'];
        $params['tahun'] = $post['tahun'];

        $this->db->insert('tanaman_biofarmaka', $params);
    }


    public function edit($post)
    {

        $params['komoditi_biofarmaka'] = $post['komoditi_biofarmaka'];
        $params['luas_panen'] = $post['luas_panen'];
        $params['luas_tanam'] = $post['luas_tanam'];
        $params['provitas'] = $post['provitas'];
        $params['produksi_biofarmaka'] = $post['produksi_biofarmaka'];
        $params['harga_biofarmaka'] = $post['harga_biofarmaka'];
        $params['tahun'] = $post['tahun'];

        $this->db->where('tahun', $post['tahun']);
        $this->db->update('tanaman_biofarmaka', $params);
    }


    public function hapus($id)
    {
        $this->db->where('id_tbiofarmaka', $id);
        $this->db->delete('tanaman_biofarmaka');
    }
    // ---------------- Dropdown databases KECAMATAN -----------------
    public function listKomoditas()
    {
        $this->db->order_by("id_komoditas", "asc");
        $query = $this->db->get("komoditas");
        return $query->result_array();
    }

    public function update_data_biofarmaka($where, $data)
    {
        $this->db->where('id_tbiofarmaka', $where);
        $this->db->update('tanaman_biofarmaka', $data);
    }
}

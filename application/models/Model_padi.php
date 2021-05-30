<?php

class Model_padi extends CI_model
{

    public function getAllPadi()
    {
        return $this->db->get('tanaman_padi_palawija')->result_array();
    }

    public function getAllPadiById($id)
    {
        $options = array('id_tpadi' => $id);
        $query = $this->db->get_where('tanaman_padi_palawija', $options);
        $ret = $query->row();
        return $ret;
    }
    public function get($id = null)
    {
        $this->db->from('tanaman_padi_palawija');
        if ($id != null) {
            $this->db->where('produksi', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    function get_sub_kecamatan($id_kecamatan)
    {
        $query = $this->db->get_where('kecamatan', array('id_kecamatan' => $id_kecamatan));
        return $query;
    }
    public function add($post)
    {
        $params['nama_kecamatan'] = $post['nama_kecamatan'];
        $params['tanam'] = $post['tanam'];
        $params['panen'] = $post['panen'];
        $params['provitas'] = $post['provitas'];
        $params['produksi'] = $post['produksi'];
        $params['tahun'] = $post['tahun'];

        $this->db->insert('tanaman_padi_palawija', $params);
    }


    public function edit($post)
    {
        $params['nama_kecamatan'] = $post['nama_kecamatan'];
        $params['tanam'] = $post['tanam'];
        $params['panen'] = $post['panen'];
        $params['provitas'] = $post['provitas'];
        $params['produksi'] = $post['produksi'];
        $params['tahun'] = $post['tahun'];
        $this->db->where('produksi', $post['produksi']);
        $this->db->update('tanaman_padi_palawija', $params);
    }


    public function hapus($id)
    {
        $this->db->where('id_tpadi', $id);
        $this->db->delete('tanaman_padi_palawija');
    }

    // ---------------- Dropdown databases KECAMATAN -----------------
    public function listKecamatan()
    {
        $this->db->order_by("id_kecamatan", "asc");
        $query = $this->db->get("kecamatan");
        return $query->result_array();
    }

    public function update_data_pad($where, $data)
    {
        $this->db->where('id_tpadi', $where);
        $this->db->update('tanaman_padi_palawija', $data);
    }
}

<?php

class Model_buah extends CI_model
{

    public function getAllBuah()
    {
        return $this->db->get('tanaman_buah')->result_array();
    }

    public function getAllBuahById($id)
    {
        $options = array('id_tbuah' => $id);
        $query = $this->db->get_where('tanaman_buah', $options);
        $ret = $query->row();
        return $ret;
    }
    public function get($id = null)
    {
        $this->db->from('tanaman_buah');
        if ($id != null) {
            $this->db->where('harga', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params['nama_tanaman'] = $post['nama_tanaman'];
        $params['jumlah_tanaman'] = $post['jumlah_tanaman'];
        $params['tanaman_baru'] = $post['tanaman_baru'];
        $params['tanaman_menghasilkan'] = $post['tanaman_menghasilkan'];
        $params['tanaman_produktif'] = $post['tanaman_produktif'];
        $params['produksi_buah'] = $post['produksi_buah'];
        $params['provitas'] = $post['provitas'];
        $params['harga'] = $post['harga'];
        $params['tahun'] = $post['tahun'];

        $this->db->insert('tanaman_buah', $params);
    }


    public function edit($post)
    {
        $params['nama_tanaman'] = $post['nama_tanaman'];
        $params['jumlah_tanaman'] = $post['jumlah_tanaman'];
        $params['tanaman_baru'] = $post['tanaman_baru'];
        $params['tanaman_menghasilkan'] = $post['tanaman_menghasilkan'];
        $params['tanaman_produktif'] = $post['tanaman_produktif'];
        $params['produksi_buah'] = $post['produksi_buah'];
        $params['provitas'] = $post['provitas'];
        $params['harga'] = $post['harga'];
        $params['tahun'] = $post['tahun'];
        $this->db->where('harga', $post['harga']);
        $this->db->update('tanaman_buah', $params);
    }


    public function hapus($id)
    {
        $this->db->where('id_tbuah', $id);
        $this->db->delete('tanaman_buah');
    }
    // ---------------- Dropdown databases KECAMATAN -----------------
    public function listKomoditas()
    {
        $this->db->order_by("id_komoditas", "asc");
        $query = $this->db->get("komoditas");
        return $query->result_array();
    }

    public function update_data_buah($where, $data)
    {
        $this->db->where('id_tbuah', $where);
        $this->db->update('tanaman_buah', $data);
    }
}

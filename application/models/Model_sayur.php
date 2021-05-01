<?php

class Model_sayur extends CI_model{

    public function getAllSayur(){
        return $this->db->get('tanaman_sayuran')->result_array();
    }

    public function getAllSayurById($id){
        $options=array('id_tsayur'=>$id);
        $query = $this->db->get_where('tanaman_sayuran',$options);
        $ret = $query->row();
        return $ret;
    }
    public function get($id = null)
    {
        $this->db->from('tanaman_sayuran');
        if($id != null) {
            $this->db->where('luas_tanam', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    function get_sub_kecamatan($id_kecamatan){
        $query = $this->db->get_where('kecamatan', array('id_kecamatan' => $id_kecamatan));
        return $query;
    }
    public function add($post)
    {
        $params['komoditi'] = $post['komoditi'];
        $params['luas_tanam'] = $post['luas_tanam'];
        $params['luas_panen'] = $post['luas_panen'];
        $params['produksi_habis_dibongkar'] = $post['produksi_habis_dibongkar'];
        $params['produksi_belum_dibongkar'] = $post['produksi_belum_dibongkar'];
        $params['total'] = $post['total'];
        $params['harga_min'] = $post['harga_min'];
        $params['harga_max'] = $post['harga_max'];
        $params['tahun'] = $post['tahun'];
        $this->db->insert('tanaman_sayuran', $params);
    }

    
        public function edit($post)
    {
        $params['komoditi'] = $post['komoditi'];
        $params['luas_tanam'] = $post['luas_tanam'];
        $params['luas_panen'] = $post['luas_panen'];
        $params['produksi_habis_dibongkar'] = $post['produksi_habis_dibongkar'];
        $params['produksi_belum_dibongkar'] = $post['produksi_belum_dibongkar'];
        $params['total'] = $post['total'];
        $params['harga_min'] = $post['harga_min'];
        $params['harga_max'] = $post['harga_max'];
        $params['tahun'] = $post['tahun'];
        $this->db->where('luas_tanam', $post['luas_tanam']);
        $this->db->update('tanaman_sayuran', $params);
    }
    

    public function hapus($id)
    {
        $this->db->where('id_tsayur', $id);
        $this->db->delete('tanaman_sayuran');
    }
// ---------------- Dropdown databases KECAMATAN -----------------
public function listKomoditas()
{
    $this->db->order_by("id_komoditas", "asc");
    $query = $this->db->get("komoditas");
    return $query->result_array();
}
}
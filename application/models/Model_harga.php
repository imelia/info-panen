<?php

class Model_harga extends CI_model{

    public function getAllHarga(){
        return $this->db->get('harga')->result_array();
    }

    public function getAllHargaById($id){
        $options=array('id_harga'=>$id);
        $query = $this->db->get_where('harga',$options);
        $ret = $query->row();
        return $ret;
    }
    public function get($id = null)
    {
        $this->db->from('harga');
        if($id != null) {
            $this->db->where('id_harga', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    
    public function add($post)
    {
        $params['harga'] = $post['harga'];
        $params['komoditas'] = $post['komoditas'];
        $params['pasar'] = $post['pasar'];
        $params['kecamatan'] = $post['kecamatan'];
        $params['keterangan'] = $post['keterangan'];
        $params['tanggal_update'] = $post['tanggal_update'];

        $this->db->insert('harga', $params);
    }

    
        public function edit($post)
    {
        $params['harga'] = $post['harga'];
        $params['komoditas'] = $post['komoditas'];
        $params['pasar'] = $post['pasar'];
        $params['kecamatan'] = $post['kecamatan'];
        $params['keterangan'] = $post['keterangan'];
        $params['tanggal_update'] = $post['tanggal_update'];
        $this->db->where('id_harga', $post['id_harga']);
        $this->db->update('harga', $params);
    }
    

    public function hapus($id)
    {
        $this->db->where('id_harga', $id);
        $this->db->delete('harga');
    }

    public function update_data_harga($where, $data)
    {
        $this->db->where('id_harga', $where);
        $this->db->update('harga', $data);
    }

    public function get_id_harga($id)
    {
        $this->db->select('harga');
        $this->db->where('id_harga', $id);
    }
// ---------------- Dropdown databases KECAMATAN -----------------
public function listKomoditas()
{
    $this->db->order_by("id_komoditas", "asc");
    $query = $this->db->get("komoditas");
    return $query->result_array();
}
// ---------------- Dropdown databases KECAMATAN -----------------
public function listKecamatan()
{
    $this->db->order_by("id_kecamatan", "asc");
    $query = $this->db->get("kecamatan");
    return $query->result_array();
}
}
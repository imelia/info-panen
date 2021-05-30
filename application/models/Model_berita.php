<?php
class Model_berita extends CI_Model {

    
    var $tabel = 'berita';

    function __construct() {
        parent::__construct();
    }
    //fungsi untuk menampilkan semua data dari tabel database untuk buku
 function get_allimage() {
        $this->db->from($this->tabel);
        $qr = $this->db->get();
        return $qr->result();
 }
   
    public function get_del($where,$table)
     //Query mengahapus berdasarkan id pada tabel order di dabatase dan ini untuk user
	{
        $this->db->where($where);

        $this->db->delete($table);
	}

    public function get_by_id($kondisi)
     //Query mengeupdate atau meng-edit berdasarkan idnya
    {
        $this->db->from('berita');
        $this->db->where($kondisi);
        $query = $this->db->get();
        return $query->row();
    }
    function get_insert2($data)
    //Query untuk memasukkan data ke dalam database untuk admin
    {
        $this->db->insert('berita', $data);
        return TRUE;
     }
    public function update2($data,$kondisi)
    //Query untuk mengupdate data berdasarkan kondisi yaitu get_by_id
  {
      $this->db->update('berita',$data,$kondisi);
      return TRUE;
  }

  public function delete($where)
  //Query untuk menghapus berdasarkan id 
  {
      $this->db->where('id_berita',$where);
      $this->db->delete('berita');
      return TRUE;
  }
  

}

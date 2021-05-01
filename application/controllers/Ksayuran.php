<?php 
class Ksayuran extends CI_Controller{
    
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $this->load->model('Model_sayur');
        $this->load->library('form_validation');
    }
    public function index()
    {   
        $data['title'] = 'Halaman Tanaman Sayur';
        $data['sayur'] = $this->Model_sayur->getAllSayur();
        
        $this->load->view('system_view/admin/sayuran/Home',$data);
    }
    public function tambah()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('komoditi', 'komoditi', 'required');
        $this->form_validation->set_rules('luas_tanam', 'luas_tanam', 'required');
        $this->form_validation->set_rules('luas_panen', 'luas_panen', 'required');
        $this->form_validation->set_rules('produksi_habis_dibongkar', 'produksi_habis_dibongkar', 'required');
        $this->form_validation->set_rules('produksi_belum_dibongkar', 'produksi_belum_dibongkar', 'required');
        $this->form_validation->set_rules('total', 'total', 'required');
        $this->form_validation->set_rules('harga_min', 'harga_min', 'required');
        $this->form_validation->set_rules('harga_max', 'harga_max', 'required');
        
        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        if ( $this->form_validation->run() == FALSE ){
                $this->load->view('system_view/admin/sayuran/Tambah');
        }else{
            $post = $this->input->post(null, TRUE);
            $this->Model_sayur->add($post);
            if($this->db->affected_rows() > 0){
                echo "<script>alert('Data Berhasil Di Simpan');</script>";
            }
            echo "<script>window.location='".site_url('sayuran')."';</script>";
        }
    }
    public function edit($id = null)
    {

        $this->form_validation->set_rules('komoditi', 'komoditi', 'required');
        $this->form_validation->set_rules('luas_tanam', 'luas_tanam', 'required');
        $this->form_validation->set_rules('luas_panen', 'luas_panen', 'required');
        $this->form_validation->set_rules('produksi_habis_dibongkar', 'produksi_habis_dibongkar', 'required');
        $this->form_validation->set_rules('produksi_belum_dibongkar', 'produksi_belum_dibongkar', 'required');
        $this->form_validation->set_rules('total', 'total', 'required');
        $this->form_validation->set_rules('harga_min', 'harga_min', 'required');
        $this->form_validation->set_rules('harga_max', 'harga_max', 'required');
        
        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        if ( $this->form_validation->run() == FALSE ){
                $query = $this->Model_sayur->get($id);
                if($query->num_rows() > 0){
                    $data['row'] = $query->row();
                    $this->load->view('system_view/admin/padi/Edit',$data);
                } else {
                    echo "<script>alert('Data Berhasil Di Simpan');";
                    echo "window.location='".site_url('sayuran')."';</script>";
                }
                
        }else{
            $post = $this->input->post(null, TRUE);
            $this->Model_sayur->edit($post);
            if($this->db->affected_rows() > 0){
                echo "<script>alert('Data Berhasil Di Simpan');</script>";
            }
            echo "<script>window.location='".site_url('sayuran')."';</script>";
        }
    }

    
    public function hapus($id){

        $this->Model_sayur->hapus($id);
        $this->session->set_flashdata('msg', 'Dihapus');
        redirect('sayuran');
    }
}

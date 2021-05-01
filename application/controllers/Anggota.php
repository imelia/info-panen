<?php 
class Anggota extends CI_Controller{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_anggota');
        $this->load->library('form_validation');
    }
    public function index()
    {   
        $data['title'] = 'Halaman Anggota';
        $data['anggota'] = $this->Model_anggota->getAllAnggota();
        
        $this->load->view('system_view/admin/anggota/Home',$data);
    }
    public function tambah()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('id_akses', 'id_akses', 'required');
        
        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        if ( $this->form_validation->run() == FALSE ){
                $this->load->view('system_view/admin/anggota/Tambah');
        }else{
            $post = $this->input->post(null, TRUE);
            $this->Model_anggota->add($post);
            if($this->db->affected_rows() > 0){
                echo "<script>alert('Data Berhasil Di Simpan');</script>";
            }
            echo "<script>window.location='".site_url('anggota')."';</script>";
        }
    }
    public function edit($id = null)
    {

        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('akses', 'akses', 'required');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        if ( $this->form_validation->run() == FALSE ){
                $query = $this->Model_anggota->get($id);
                if($query->num_rows() > 0){
                    $data['row'] = $query->row();
                    $this->load->view('system_view/admin/anggota/Edit',$data);
                } else {
                    echo "<script>alert('Data Berhasil Di Simpan');";
                    echo "window.location='".site_url('anggota')."';</script>";
                }
                
        }else{
            $post = $this->input->post(null, TRUE);
            $this->Model_anggota->edit($post);
            if($this->db->affected_rows() > 0){
                echo "<script>alert('Data Berhasil Di Simpan');</script>";
            }
            echo "<script>window.location='".site_url('anggota')."';</script>";
        }
    }

    public function hapus($id){

        $this->Model_anggota->hapus($id);
        $this->session->set_flashdata('msg', 'Dihapus');
        redirect('anggota');
    }
}

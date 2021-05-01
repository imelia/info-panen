<?php
class Ppadi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_padi');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Halaman Tanaman Padi Palawija';
        $data['padi'] = $this->Model_padi->getAllPadi();

        $this->load->view('system_view/admin/padi/Home', $data);
    }
    public function tambah()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama_kecamatan', 'nama_kecamatan', 'required');
        $this->form_validation->set_rules('tanam', 'tanam', 'required');
        $this->form_validation->set_rules('panen', 'panen', 'required');
        $this->form_validation->set_rules('produksi', 'produksi', 'required');
        $this->form_validation->set_rules('tahun', 'tahun', 'required');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        if ($this->form_validation->run() == FALSE) {
            $data['listKec'] = $this->Model_padi->listKecamatan();
            $this->load->view('system_view/admin/padi/Tambah', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $this->Model_padi->add($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data Berhasil Di Simpan');</script>";
            }
            echo "<script>window.location='" . site_url('padi') . "';</script>";
        }
    }
    public function edit($id = null)
    {

        $this->form_validation->set_rules('nama_kecamatan', 'kecamatan', 'required');
        $this->form_validation->set_rules('tanam', 'tanam', 'required');
        $this->form_validation->set_rules('panen', 'panen', 'required');
        $this->form_validation->set_rules('produksi', 'produksi', 'required');
        $this->form_validation->set_rules('tahun', 'tahun', 'required');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        if ($this->form_validation->run() == FALSE) {
            $query = $this->Model_padi->get($id);
            if ($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $data['listKec'] = $this->Model_padi->listKecamatan();
                $this->load->view('system_view/admin/padi/Edit', $data);
            } else {
                echo "<script>alert('Data Berhasil Di Simpan');";
                echo "window.location='" . site_url('padi') . "';</script>";
            }
        } else {
            $post = $this->input->post(null, TRUE);
            $this->Model_padi->edit($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data Berhasil Di Simpan');</script>";
            }
            echo "<script>window.location='" . site_url('padi') . "';</script>";
        }
    }

    public function hapus($id)
    {

        $this->Model_padi->hapus($id);
        $this->session->set_flashdata('msg', 'Dihapus');
        redirect('padi');
    }
}

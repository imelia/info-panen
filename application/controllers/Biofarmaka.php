<?php
class Biofarmaka extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $this->load->model('Model_biofarmaka');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Halaman Tanaman Biofarmaka';
        $data['biofarmaka'] = $this->Model_biofarmaka->getAllBiofarmaka();

        $this->load->view('system_view/admin/biofarmaka/Home', $data);
    }
    public function tambah()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('komoditi_biofarmaka', 'komoditi_biofarmaka', 'required');
        $this->form_validation->set_rules('luas_panen', 'luas_panen', 'required');
        $this->form_validation->set_rules('luas_tanam', 'luas_tanam', 'required');
        $this->form_validation->set_rules('provitas', 'provitas', 'required');
        $this->form_validation->set_rules('produksi_biofarmaka', 'produksi_biofarmaka', 'required');
        $this->form_validation->set_rules('harga_biofarmaka', 'harga_biofarmaka', 'required');
        $this->form_validation->set_rules('tahun', 'tahun', 'required');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        if ($this->form_validation->run() == FALSE) {
            $data['biofarmaka'] = $this->Model_biofarmaka->getAllBiofarmaka();
            $data['listKec'] = $this->Model_biofarmaka->listKomoditas();
            $this->load->view('system_view/admin/biofarmaka/Tambah', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $this->Model_biofarmaka->add($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data Berhasil Di Simpan');</script>";
            }
            echo "<script>window.location='" . site_url('biofarmaka') . "';</script>";
        }
    }
    public function edit($id = null)
    {

        $this->form_validation->set_rules('komoditi_biofarmaka', 'komoditi_biofarmaka', 'required');
        $this->form_validation->set_rules('luas_panen', 'luas_panen', 'required');
        $this->form_validation->set_rules('luas_tanam', 'luas_tanam', 'required');
        $this->form_validation->set_rules('provitas', 'provitas', 'required');
        $this->form_validation->set_rules('produksi_biofarmaka', 'produksi_biofarmaka', 'required');
        $this->form_validation->set_rules('harga_biofarmaka', 'harga_biofarmaka', 'required');
        $this->form_validation->set_rules('tahun', 'tahun', 'required');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        if ($this->form_validation->run() == FALSE) {
            $query = $this->Model_biofarmaka->get($id);
            if ($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $data['listKec'] = $this->Model_biofarmaka->listKomoditas();
                $this->load->view('system_view/admin/biofarmaka/Edit', $data);
            } else {
                echo "<script>alert('Data Berhasil Di Simpan');";
                echo "window.location='" . site_url('biofarmaka') . "';</script>";
            }
        } else {
            $post = $this->input->post(null, TRUE);
            $this->Model_biofarmaka->edit($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data Berhasil Di Simpan');</script>";
            }
            echo "<script>window.location='" . site_url('biofarmaka') . "';</script>";
        }
    }

    public function hapus($id)
    {

        $this->Model_biofarmaka->hapus($id);
        $this->session->set_flashdata('msg', 'Dihapus');
        redirect('biofarmaka');
    }
}

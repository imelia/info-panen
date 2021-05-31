<?php
class Harga extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $this->load->model('Model_harga');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Halaman Harga';
        $data['harga'] = $this->Model_harga->getAllHarga();

        $this->load->view('system_view/admin/harga/Home', $data);
    }
    public function tambah()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('harga', 'harga', 'required');
        $this->form_validation->set_rules('komoditas', 'komoditas', 'required');
        $this->form_validation->set_rules('pasar', 'pasar', 'required');
        $this->form_validation->set_rules('kecamatan', 'kecamatan', 'required');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required');
        $this->form_validation->set_rules('tanggal_update', 'tanggal_update', 'required');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        if ($this->form_validation->run() == FALSE) {
            $data['harga'] = $this->Model_harga->getAllHarga();
            $data['listKom'] = $this->Model_harga->listKomoditas();
            $data['listKec'] = $this->Model_harga->listKecamatan();
            $this->load->view('system_view/admin/harga/Tambah', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $this->Model_harga->add($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data Berhasil Di Simpan');</script>";
            }
            echo "<script>window.location='" . site_url('harga') . "';</script>";
        }
    }
    public function edit($id = null)
    {

        $this->form_validation->set_rules('harga', 'harga', 'required');
        $this->form_validation->set_rules('komoditas', 'komoditas', 'required');
        $this->form_validation->set_rules('pasar', 'pasar', 'required');
        $this->form_validation->set_rules('kecamatan', 'kecamatan', 'required');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required');
        $this->form_validation->set_rules('tanggal_update', 'tanggal_update', 'required');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        if ($this->form_validation->run() == FALSE) {
            $query = $this->Model_harga->get($id);
            if ($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $data['listKom'] = $this->Model_harga->listKomoditas();
                $data['listKec'] = $this->Model_harga->listKecamatan();
                $this->load->view('system_view/admin/harga/Edit', $data);
            } else {
                echo "<script>alert('Data Berhasil Di Simpan');";
                echo "window.location='" . site_url('harga') . "';</script>";
            }
        } else {
            $post = $this->input->post(null, TRUE);
            $this->Model_harga->edit($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data Berhasil Di Simpan');</script>";
            }
            echo "<script>window.location='" . site_url('harga') . "';</script>";
        }
    }


    public function hapus($id)
    {

        $this->Model_harga->hapus($id);
        $this->session->set_flashdata('msg', 'Dihapus');
        redirect('harga');
    }
}

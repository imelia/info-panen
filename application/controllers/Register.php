<?php
class Register extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_register');
        $this->load->library('form_validation');
    }
    public function index()
    {
        if ($this->session->userdata('username')) {
            $data['role'] = $this->db->get_where('login_anggota', ['username' => $this->session->userdata('username')])->row_array();
            // echo '<pre>';
            // print_r($data['role']);
            // echo '</pre>';
            // die;
            if ($data['role']['id_akses'] == 'admin') {
                redirect('admin');
            } elseif ($data['role']['id_akses'] == 'petani') {
                redirect('petani');
            } elseif ($data['role']['id_akses'] == 'pembeli') {
                redirect('pembeli');
            }
        }
        $data['title'] = 'Halaman Registrasi';
        $data['register'] = $this->Model_register->getAllRegister();

        $this->load->view('system_view/login/register', $data);
    }
    public function proses()
    {
        if ($this->session->userdata('username')) {
            $data['role'] = $this->db->get_where('login_anggota', ['username' => $this->session->userdata('username')])->row_array();
            // echo '<pre>';
            // print_r($data['role']);
            // echo '</pre>';
            // die;
            if ($data['role']['id_akses'] == 'admin') {
                redirect('admin');
            } elseif ($data['role']['id_akses'] == 'petani') {
                redirect('petani');
            } elseif ($data['role']['id_akses'] == 'pembeli') {
                redirect('pembeli');
            }
        }
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('id_akses', 'id_akses', 'required');
        $this->form_validation->set_rules('atas_nama', 'atas_nama', 'trim');
        $this->form_validation->set_rules('no_rekening', 'no_rekening', 'trim');
        $this->form_validation->set_rules('nama_bank', 'nama_bank', 'trim');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        if ($this->form_validation->run() == FALSE) {
            $data['register'] = $this->Model_register->getAllRegister();
            $data['listKec'] = $this->Model_register->getAll();
            $this->load->view('system_view/login/register');
        } else {
            $post = $this->input->post(null, TRUE);
            // echo '<pre>';
            // print_r($post);
            // die;
            // echo '</pre>';
            $this->Model_register->add($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data Berhasil Di Simpan');</script>";
            }
            echo "<script>window.location='" . site_url('auth') . "';</script>";
        }
    }
}

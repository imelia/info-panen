<?php
class Data extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_register');
        $this->load->library('form_validation');
    }
    public function index($page = NULL, $offset = '', $key = NULL)
    {
        $data['query'] = $this->Model_register->getAllPetani(); //query dari model

        $this->load->view('system_view/admin/data/Home', $data); //tampilan awal ketika controller upload di akses
    }

    public function tambah()
    {
        $data['title'] = 'Halaman Tambah Data';
        $data['register'] = $this->Model_register->getAllRegister();

        $this->load->view('system_view/admin/data/Tambah', $data);
    }
    public function proses()
    {
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
            $this->load->view('system_view/admin/data/Tambah');
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
            echo "<script>window.location='" . site_url('data') . "';</script>";
        }
    }
    public function delete() //DELETE USER STILL COMPLEX ALGORITHM
    {
        $where =  $this->input->get('id');
        $tb['petani'] = $this->db->get_where('data_daftar_petani', ['id_daftar_petani' => $this->input->get('id')])->row_array();

        //get gambar yang lama

        $old_image = $tb['petani']['ktp'];
        if ($old_image != 'default.png') {
            @unlink(FCPATH . 'uploads/ktp/' . $old_image);
        }

        $this->db->delete('data_daftar_petani', ['id_anggota' => $where]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Hapus Data Petani Berhasil
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
        redirect('Data');
    }
}

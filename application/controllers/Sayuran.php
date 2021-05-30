<?php
class Sayuran extends CI_Controller
{

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

        $this->load->view('system_view/admin/sayuran/Home', $data);
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
        $this->form_validation->set_rules('total', 'total', 'required');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        if ($this->form_validation->run() == FALSE) {
            $data['sayur'] = $this->Model_sayur->getAllSayur();
            $data['listKec'] = $this->Model_sayur->listKomoditas();
            $this->load->view('system_view/admin/sayuran/Tambah', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $this->Model_sayur->add($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data Berhasil Di Simpan');</script>";
            }
            echo "<script>window.location='" . site_url('sayuran') . "';</script>";
        }
    }

    public function edit($id = '')
    {
        $data['query'] = $this->db->get_where('tanaman_sayuran', ['id_tsayur' => $id])->row();
        $data['listKec'] = $this->Model_sayur->listKomoditas();
        $this->load->view('system_view/admin/sayuran/Edit', $data, FALSE);
    }

    public function update()
    {

        $where = $this->input->post('id_tsayur');
        $data = [
            'komoditi' => $this->input->post('komoditi'),
            'luas_tanam' => $this->input->post('luas_tanam'),
            'luas_panen' => $this->input->post('luas_panen'),
            'produksi_habis_dibongkar' => $this->input->post('produksi_habis_dibongkar'),
            'produksi_belum_dibongkar' => $this->input->post('produksi_belum_dibongkar'),
            'total' => $this->input->post('total'),
            'harga_min' => $this->input->post('harga_min'),
            'harga_max' => $this->input->post('harga_max'),
            'tahun' => $this->input->post('tahun'),
        ];

        // var_dump($where);
        // var_dump($data);
        // die;
        $this->Model_sayur->update_data_sayur($where, $data);

        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
                    Data Sayur sudah terupdate !
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>'
        );
        redirect('sayuran');
    }

    public function hapus($id)
    {

        $this->Model_sayur->hapus($id);
        $this->session->set_flashdata('msg', 'Dihapus');
        redirect('sayuran');
    }
}

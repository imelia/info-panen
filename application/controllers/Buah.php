<?php
class Buah extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $this->load->model('Model_buah');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Halaman Tanaman Buah';
        $data['buah'] = $this->Model_buah->getAllBuah();

        $this->load->view('system_view/admin/buah/Home', $data);
    }
    public function tambah()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama_tanaman', 'nama_tanaman', 'required');
        $this->form_validation->set_rules('jumlah_tanaman', 'jumlah_tanaman', 'required');
        $this->form_validation->set_rules('tanaman_baru', 'tanaman_baru', 'required');
        $this->form_validation->set_rules('tanaman_menghasilkan', 'tanaman_menghasilkan', 'required');
        $this->form_validation->set_rules('tanaman_produktif', 'tanaman_produktif', 'required');
        $this->form_validation->set_rules('produksi_buah', 'produksi_buah', 'required');
        $this->form_validation->set_rules('provitas', 'provitas', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required');
        $this->form_validation->set_rules('tahun', 'tahun', 'required');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        if ($this->form_validation->run() == FALSE) {
            $data['buah'] = $this->Model_buah->getAllBuah();
            $data['listKec'] = $this->Model_buah->listKomoditas();
            $this->load->view('system_view/admin/buah/Tambah', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $this->Model_buah->add($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data Berhasil Di Simpan');</script>";
            }
            echo "<script>window.location='" . site_url('buah') . "';</script>";
        }
    }
    public function edit($id = '')
    {

        $this->form_validation->set_rules('nama_tanaman', 'nama_tanaman', 'required');
        $this->form_validation->set_rules('jumlah_tanaman', 'jumlah_tanaman', 'required');
        $this->form_validation->set_rules('tanaman_baru', 'tanaman_baru', 'required');
        $this->form_validation->set_rules('tanaman_menghasilkan', 'tanaman_menghasilkan', 'required');
        $this->form_validation->set_rules('tanaman_produktif', 'tanaman_produktif', 'required');
        $this->form_validation->set_rules('produksi_buah', 'produksi_buah', 'required');
        $this->form_validation->set_rules('provitas', 'provitas', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required');
        $this->form_validation->set_rules('tahun', 'tahun', 'required');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        if ($this->form_validation->run() == FALSE) {
            $data['row'] =  $this->db->get_where('tanaman_buah', ['id_tbuah' => $id])->row();
            $data['listKom'] = $this->Model_buah->listKomoditas();
            $this->load->view('system_view/admin/buah/Edit', $data);
        } else {
            $where = $this->input->post('id');
            $data = [
                'nama_tanaman' => $this->input->post('nama_tanaman'),
                'jumlah_tanaman' => $this->input->post('jumlah_tanaman'),
                'tanaman_baru' => $this->input->post('tanaman_baru'),
                'tanaman_menghasilkan' => $this->input->post('tanaman_menghasilkan'),
                'tanaman_produktif' => $this->input->post('tanaman_produktif'),
                'provitas' => $this->input->post('provitas'),
                'harga' => $this->input->post('harga'),
                'tahun' => $this->input->post('tahun'),
            ];

            // var_dump($where);
            // var_dump($data);
            // die;

            $this->Model_buah->update_data_buah($where, $data);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">
                    Data buah sudah terupdate !
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>'
            );
            redirect('buah');
        }
    }

    public function hapus($id)
    {

        $this->Model_buah->hapus($id);
        $this->session->set_flashdata('msg', 'Dihapus');
        redirect('buah');
    }
}

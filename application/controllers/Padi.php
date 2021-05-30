<?php
class Padi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
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
        $this->form_validation->set_rules('provitas', 'provitas', 'required');
        $this->form_validation->set_rules('produksi', 'produksi', 'required');
        $this->form_validation->set_rules('tahun', 'tahun', 'required');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        if ($this->form_validation->run() == FALSE) {
            $query = $this->Model_padi->get($id);
            $data['row'] = $query->row();
            $data['listKec'] = $this->Model_padi->listKecamatan();
            $this->load->view('system_view/admin/padi/Edit', $data);
        } else {
            $where = $this->input->post('id');
            $data = [
                'nama_kecamatan' => $this->input->post('nama_kecamatan'),
                'tanam' => $this->input->post('tanam'),
                'panen' => $this->input->post('panen'),
                'provitas' => $this->input->post('provitas'),
                'produksi' => $this->input->post('produksi'),
                'tahun' => $this->input->post('tahun'),
            ];

            // var_dump($where);
            // var_dump($data);
            // die;
            $this->Model_padi->update_data_pad($where, $data);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">
                    Data padi sudah terupdate !
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>'
            );
            redirect('padi');
        }
    }

    public function hapus($id)
    {

        $this->Model_padi->hapus($id);
        $this->session->set_flashdata('msg', 'Dihapus');
        redirect('padi');
    }
}

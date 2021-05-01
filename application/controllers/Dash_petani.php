<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dash_petani extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Model_petani'); //load model model_upldgbr yang berada di folder model
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $this->load->helper(array('url')); //load helper url
        $this->load->model('Model_dash_admin', 'mda');
    }

    public function index($page = NULL, $offset = '', $key = NULL)
    {
        $data['query'] = $this->Model_petani->get_allimage(); //query dari model

        $this->load->view('system_view/petani/data/Home', $data); //tampilan awal ketika controller upload di akses
    }

    public function rekening()
    {
        $data['rekening'] = $this->mda->getRekening();
        $this->load->view('system_view/petani/rekening/Home', $data, FALSE);
    }
    public function add_rekening()
    {
        // $data['rekening'] = $this->mda->getRekening();
        $this->form_validation->set_rules('nama_bank', 'Nama Bank', 'required|trim', [
            'required' => '%s harus di isi',
        ]);
        $this->form_validation->set_rules('nomor_rekening', 'Nomor Rekening', 'required|trim|is_unique[rekening.nomor_rekening]', [
            'required' => '%s harus di isi',
            'is_unique' => '%s Sudah ada. Buat nomor rekening baru!',
        ]);
        $this->form_validation->set_rules('nama_pemilik', 'Atas Nama', 'required|trim', [
            'required' => '%s harus di isi',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('system_view/petani/rekening/Tambah');
        } else {
            $nama_bank = $this->input->post('nama_bank');
            $nomor_rekening = $this->input->post('nomor_rekening');
            $nama_pemilik = $this->input->post('nama_pemilik');

            $data = array(
                'nama_bank' => $nama_bank,
                'nomor_rekening' => $nomor_rekening,
                'nama_pemilik' => $nama_pemilik,
            );
            $this->db->insert('rekening', $data);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert"> Rekening berhasil ditambahkan ! 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
            );
            redirect(base_url('Dash_petani/rekening'), 'refresh');
        }
    }
    public function edit_rekening($id_rekening)
    {
        $data['query'] = $this->mda->getRowRekening($id_rekening);
        $this->load->view('system_view/petani/rekening/Edit', $data);
    }
    public function update_rekening()
    {
        // $data['rekening'] = $this->mda->getRekening();
        $this->form_validation->set_rules('nama_bank', 'Nama Bank', 'required|trim', [
            'required' => '%s harus di isi',
        ]);
        $this->form_validation->set_rules('nomor_rekening', 'Nomor Rekening', 'required|trim', [
            'required' => '%s harus di isi',
        ]);
        $this->form_validation->set_rules('nama_pemilik', 'Atas Nama', 'required|trim', [
            'required' => '%s harus di isi',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('system_view/petani/rekening/Tambah');
        } else {
            $id_rek = $this->input->post('id_rekening');
            $nama_bank = $this->input->post('nama_bank');
            $nomor_rekening = $this->input->post('nomor_rekening');
            $nama_pemilik = $this->input->post('nama_pemilik');

            $data = array(
                'nama_bank' => $nama_bank,
                'nomor_rekening' => $nomor_rekening,
                'nama_pemilik' => $nama_pemilik,
            );
            $this->db->where('id_rekening', $id_rek);
            $this->db->update('rekening', $data);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert"> Rekening berhasil diedit ! 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
            );
            redirect(base_url('Dash_petani/rekening'), 'refresh');
        }
    }
    public function hapus_rekening()
    {
        $id_rek = $this->uri->segment(3);
        $this->db->where('id_rekening', $id_rek);
        $data = $this->db->delete('rekening');
        if ($data) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert"> Rekening berhasil dihapus ! 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
            );
            redirect(base_url('Dash_petani/rekening'), 'refresh');
        }
    }
}

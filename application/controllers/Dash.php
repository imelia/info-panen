<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dash extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('username')) {
			redirect('auth');
		}
		$this->load->model('Model_dash_admin', 'mda');
	}
	public function index()
	{
		$data['title'] = 'IP - Info Panen';
		$data['biochart'] = $this->mda->graph_biofarmaka();
		$data['buahchart'] = $this->mda->graph_buah();
		$data['padipal'] = $this->mda->graph_padipalawija();
		$data['sayur'] = $this->mda->graph_sayuran();
		$tmp['content'] = $this->load->view('system_view/dashboard_admin2', $data, TRUE);
		$this->load->view('system_view/dashboard_admin2', $data);
	}
	// public function rekening()
	// {
	// 	$data['buahchart'] = $this->mda->graph_buah();
	// 	$data['padipal'] = $this->mda->graph_padipalawija();
	// 	$data['sayur'] = $this->mda->graph_sayuran();
	// 	$data['biochart'] = $this->mda->graph_biofarmaka();
	// 	$data['rekening'] = $this->mda->getRekening();
	// 	$this->load->view('system_view/admin/rekening/Home', $data, FALSE);
	// }
	// public function add_rekening()
	// {
	// 	// $data['rekening'] = $this->mda->getRekening();
	// 	$this->form_validation->set_rules('nama_bank', 'Nama Bank', 'required|trim', [
	// 		'required' => '%s harus di isi',
	// 	]);
	// 	$this->form_validation->set_rules('nomor_rekening', 'Nomor Rekening', 'required|trim|is_unique[rekening.nomor_rekening]', [
	// 		'required' => '%s harus di isi',
	// 		'is_unique' => '%s Sudah ada. Buat nomor rekening baru!',
	// 	]);
	// 	$this->form_validation->set_rules('nama_pemilik', 'Atas Nama', 'required|trim', [
	// 		'required' => '%s harus di isi',
	// 	]);
	// 	if ($this->form_validation->run() == false) {
	// 		$this->load->view('system_view/admin/rekening/Tambah');
	// 	} else {
	// 		$nama_bank = $this->input->post('nama_bank');
	// 		$nomor_rekening = $this->input->post('nomor_rekening');
	// 		$nama_pemilik = $this->input->post('nama_pemilik');

	// 		$data = array(
	// 			'nama_bank' => $nama_bank,
	// 			'nomor_rekening' => $nomor_rekening,
	// 			'nama_pemilik' => $nama_pemilik,
	// 		);
	// 		$this->db->insert('rekening', $data);
	// 		$this->session->set_flashdata(
	// 			'message',
	// 			'<div class="alert alert-success" role="alert"> Rekening berhasil ditambahkan ! 
	// 				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	// 					<span aria-hidden="true">&times;</span>
	// 				</button>
	// 			</div>'
	// 		);
	// 		redirect(base_url('Dash/rekening'), 'refresh');
	// 	}
	// }
	// public function edit_rekening($id_rekening)
	// {
	// 	$data['query'] = $this->mda->getRowRekening($id_rekening);
	// 	$this->load->view('system_view/admin/rekening/Edit', $data);
	// }
	// public function update_rekening()
	// {
	// 	// $data['rekening'] = $this->mda->getRekening();
	// 	$this->form_validation->set_rules('nama_bank', 'Nama Bank', 'required|trim', [
	// 		'required' => '%s harus di isi',
	// 	]);
	// 	$this->form_validation->set_rules('nomor_rekening', 'Nomor Rekening', 'required|trim', [
	// 		'required' => '%s harus di isi',
	// 	]);
	// 	$this->form_validation->set_rules('nama_pemilik', 'Atas Nama', 'required|trim', [
	// 		'required' => '%s harus di isi',
	// 	]);
	// 	if ($this->form_validation->run() == false) {
	// 		$this->load->view('system_view/admin/rekening/Tambah');
	// 	} else {
	// 		$id_rek = $this->input->post('id_rekening');
	// 		$nama_bank = $this->input->post('nama_bank');
	// 		$nomor_rekening = $this->input->post('nomor_rekening');
	// 		$nama_pemilik = $this->input->post('nama_pemilik');

	// 		$data = array(
	// 			'nama_bank' => $nama_bank,
	// 			'nomor_rekening' => $nomor_rekening,
	// 			'nama_pemilik' => $nama_pemilik,
	// 		);
	// 		$this->db->where('id_rekening', $id_rek);
	// 		$this->db->update('rekening', $data);
	// 		$this->session->set_flashdata(
	// 			'message',
	// 			'<div class="alert alert-success" role="alert"> Rekening berhasil diedit ! 
	// 				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	// 					<span aria-hidden="true">&times;</span>
	// 				</button>
	// 			</div>'
	// 		);
	// 		redirect(base_url('Dash/rekening'), 'refresh');
	// 	}
	// }
	// public function hapus_rekening()
	// {
	// 	$id_rek = $this->uri->segment(3);
	// 	$this->db->where('id_rekening', $id_rek);
	// 	$data = $this->db->delete('rekening');
	// 	if ($data) {
	// 		$this->session->set_flashdata(
	// 			'message',
	// 			'<div class="alert alert-success" role="alert"> Rekening berhasil dihapus ! 
	// 				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	// 					<span aria-hidden="true">&times;</span>
	// 				</button>
	// 			</div>'
	// 		);
	// 		redirect(base_url('Dash/rekening'), 'refresh');
	// 	}
	// }
}

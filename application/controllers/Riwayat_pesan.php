<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Riwayat_pesan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $this->load->helper(array('url')); //load helper url 
        $this->load->library('session');
        $this->load->model('Model_riwayat_pesan'); //load model model_upldgbr yang berada di folder model
    }
    public function index()
    {
        $data['query'] = $this->Model_riwayat_pesan->id_header_transaksi(); //query dari model

        $this->load->view('system_view/petani/riwayat_pesan/Home', $data); //tampilan awal ketika controller upload di akses
    }
    public function edit($id_header_transaksi)
    {
        $data['query'] = $this->Model_riwayat_pesan->id_header_transaksi_update($id_header_transaksi);
        $this->load->view('system_view/petani/riwayat_pesan/Update', $data, FALSE);
    }
    public function update()
    {

        $id_header_transaksi = $this->input->post('id_header');
        $data = array(
            'nama_pembeli' => $this->input->post('nama_pembeli'),
            'nama_produk' => $this->input->post('nama_produk'),
            'jumlah_transaksi' => $this->input->post('jumlah_transaksi'),
            'jumlah_bayar' => $this->input->post('jumlah_bayar'),
            'status_bayar' => $this->input->post('status_bayar'),
        );
        $this->db->where('id_header_transaksi', $id_header_transaksi);
        $this->db->update('header_transaksi', $data);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert"> Konfirmasi data berhasil ! 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>'
        );
        redirect(base_url('Riwayat_pesan'), 'refresh');
    }
}

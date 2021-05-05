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
        $id_anggota = $this->db->get_where('login_anggota', ['username' => $this->session->userdata('username')])->row_array();
        $data['query'] = $this->Model_petani->get_allimage($id_anggota['id_anggota']); //query dari model

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
                'nama_bank'         => $nama_bank,
                'nomor_rekening'    => $nomor_rekening,
                'nama_pemilik'      => $nama_pemilik,
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





    public function my_profile()
    {
        $data['title'] = "My Profile";
        $data['title_nav'] = "My Profile";
        $data['user'] = $this->db->get_where('login_anggota', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('system_view/petani/profile/my_profile', $data);
    }

    public function edit_profile()
    {
        $data['title'] = "Edit Profile";
        $data['title_nav'] = "Edit Profile";
        $data['user'] = $this->db->get_where('login_anggota', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('username', 'Username', 'required|trim', [
            'required' => 'Kolom %s input tidak boleh kosong',
        ]);
        $this->form_validation->set_rules('no_telp', 'No Telpon', 'required|trim|numeric|min_length[12]|max_length[12]', [
            'required' => 'Kolom input tidak boleh kosong',
            'numeric' => 'Kolom harus berisi angka !',
            'min_length' => 'Kolom harus berisi minimal 12 karakter !',
            'max_length' => 'Kolom harus berisi maximal 12 karakter !',
        ]);
        $this->form_validation->set_rules('no_rekening', 'No Rekening', 'required|trim', [
            'required' => 'Kolom %s input tidak boleh kosong',
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [
            'required' => 'Kolom %s input tidak boleh kosong',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('system_view/petani/profile/edit_profile', $data);
        } else {
            $id_anggota   = $this->input->post('id_anggota');
            $no_telp = $this->input->post('no_telp');
            $no_rekening = $this->input->post('no_rekening');
            $alamat = $this->input->post('alamat');

            $path = './assets/img/profile/';

            $where = array('id_anggota' => $id_anggota);

            // get foto
            $pict = "file_" . time();
            $config['upload_path'] = './assets/img/profile/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '2048';  //2MB max
            $config['max_width'] = '4480'; // pixel
            $config['max_height'] = '4480'; // pixel
            $config['file_name'] = $pict;

            $this->upload->initialize($config);

            if (!empty($_FILES['image']['name'])) {
                if ($this->upload->do_upload('image')) {
                    $gambar = $this->upload->data();
                    $data = array(
                        'image'                 => $gambar['file_name'],
                        'no_telp'               => $no_telp,
                        'no_rekening'           => $no_rekening,
                        'alamat'                => $alamat,
                    );
                    // print_r($data);
                    // print_r($id);
                    // hapus foto pada direktori
                    @unlink($path . $this->input->post('filelama'));
                    $this->Model_petani->updateAnggota($data, $where);
                    $this->session->set_flashdata(
                        'message',
                        '<div class="alert alert-success" role="alert"> Selamat akun anda terupdate 
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>'
                    );
                    redirect('Dash_petani/my_profile');
                } else {
                    die("gagal update data");
                }
            } else {
                $data = array(
                    'no_telp'               => $no_telp,
                    'no$no_rekening'        => $no_rekening,
                    'alamat'                => $alamat,
                );
                // print_r($data);
                // print_r($id);
                // hapus foto pada direktori
                $this->Model_petani->update2($data, $where);
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success" role="alert"> Selamat akun anda terupdate 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('Dash_petani/my_profile');
            }
        }
    }
}

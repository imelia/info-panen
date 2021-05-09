<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class VTanam_panen extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $this->load->helper(array('url')); //load helper url 
        $this->load->library('session');
        $this->load->model('Model_tanam'); //load model model_upldgbr yang berada di folder model
        $this->load->model('Model_petani');
    }

    public function index($page = NULL, $offset = '', $key = NULL)
    {
        $data['query'] = $this->Model_tanam->get_dataShop(); //query dari model

        $this->load->view('pembeli/tanam_panen', $data); //tampilan awal ketika controller upload di akses
    }

    public function add_cart($id)
    {
        $tanam_panen = $this->Model_tanam->find($id);

        $data = array(
            'id' => $tanam_panen->id_tanam_panen,
            'qty' => 1,
            'price' => $tanam_panen->harga_panen,
            'name' => $tanam_panen->komoditi,
            'image' => $tanam_panen->gambar_panen,
            'id_penjual' => $tanam_panen->id_anggota,
        );

        $this->cart->insert($data);
        redirect('Vtanam_panen');
    }

    public function detail_cart()
    {
        // $data['query'] = $this->Model_tanam->get_allimage();
        $this->load->view('pembeli/keranjang');
    }
    public function delAll_order()
    {
        $this->cart->destroy();
        redirect('Vtanam_panen');
    }
    public function hapus($rowid = '')
    {
        if ($rowid) {
            $this->cart->remove($rowid);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Keranjang berhasil dihapus
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect(base_url('VTanam_panen/detail_cart'), 'refresh');
        }
    }
    public function checkout()
    {
        if ($this->session->userdata('username')) {
            $pembeli = $this->db->get_where('login_anggota', ['username' => $this->session->userdata('username')])->row_array();
            // echo '<pre>';
            // print_r($pembeli);
            // echo '</pre>';
            // die;
            $keranjang = $this->cart->contents();

            $data = array(
                'title' => 'Checkout',
                'keranjang' => $keranjang,
                'pembeli' => $pembeli,
            );

            $this->form_validation->set_rules('username', 'username', 'required|trim', [
                'required' => '%s harus di isi',
            ]);
            $this->form_validation->set_rules('id_akses', 'id_akses', 'required|trim', [
                'required' => '%s harus di isi',
            ]);
            if ($this->form_validation->run() == false) {
                $this->load->view('pembeli/checkout', $data, FALSE);
            } else {
                $nama_produk = $this->input->post('nama_produk');
                $id_anggota = $this->input->post('id_anggota');
                $id_penjual = $this->input->post('id_penjual');
                $total = $this->input->post('jumlah_transaksi');
                for ($i = 0; $i < count($id_anggota); $i++) {
                    $data = array(
                        'id_anggota' => $id_anggota[$i],
                        'jumlah_transaksi' => $total[$i],
                        'status_bayar' => '',
                        'nama_pembeli' => $this->input->post('username'),
                        'nama_produk' => $nama_produk[$i],
                        'role' => $this->input->post('id_akses'),
                        'id_penjual' => $id_penjual[$i],
                    );
                    // echo '<pre>';
                    // print_r($data);
                    // echo '</pre>';
                    $query1 = $this->db->insert('header_transaksi', $data);
                }


                if ($query1) {
                    $id_anggota = $this->input->post('id_anggota');
                    $id_produk = $this->input->post('id_produk');
                    $nama_produk = $this->input->post('nama_produk');
                    $qty = $this->input->post('qty');
                    $price = $this->input->post('price');
                    $total = $this->input->post('jumlah_transaksi');
                    for ($i = 0; $i < count($id_produk); $i++) {
                        $data = array(
                            'id_anggota' => $id_anggota[$i],
                            'id_produk' => $id_produk[$i],
                            'nama_product' => $nama_produk[$i],
                            'harga' => $price[$i],
                            'jumlah' => $qty[$i],
                            'total_harga' => $total[$i],
                        );
                        $this->db->insert('transaksi', $data);
                        $this->cart->destroy();
                    }
                    $this->session->set_flashdata(
                        'message',
                        '<div class="alert alert-success" role="alert"> Checkout Berhasil pesanan anda kami proses ! 
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>'
                    );
                    redirect(base_url('Vtanam_panen/riwayat_pesan'), 'refresh');
                }
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Silahkan Login atau Registrasi dahulu
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect(base_url('Auth'), 'refresh');
        }
    }
    public function riwayat_pesan()
    {
        // take data login
        $data['login'] = $this->db->get_where('login_anggota', ['username' => $this->session->userdata('username')])->row();

        $header_transaksi = $this->Model_tanam->pembeli($data['login']->id_anggota);
        // echo '<pre>';
        // print_r($header_transaksi);
        // die;
        // echo '</pre>';
        $keranjang = $this->cart->contents();

        $data = array(
            'header_transaksi' => $header_transaksi,
            'keranjang' => $keranjang,
        );

        $this->load->view('pembeli/riwayat_pesanan', $data, FALSE);
    }

    public function detail_riwayat($id_header_transaksi)
    {
        $id_anggota = $this->db->get_where('login_anggota', ['username' => $this->session->userdata('username')])->row();

        $header_transaksi = $this->Model_tanam->id_header_transaksi($id_header_transaksi);

        if ($header_transaksi->id_anggota != $id_anggota->id_anggota) {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Anda Mencoba mengakses data pembeli lain
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect(base_url('detail_riwayat'));
        }

        $data = array(
            'header_transaksi' => $header_transaksi,
        );

        $this->load->view('pembeli/detail_riwayat', $data, FALSE);
    }

    public function laporan($jum_trans)
    {
        // take data login
        $data['login'] = $this->db->get_where('login_anggota', ['username' => $this->session->userdata('username')])->row();

        $header_transaksi = $this->Model_tanam->pembeli_t($jum_trans);

        $data = array(
            'header_transaksi' => $header_transaksi,
        );

        $this->load->view('pembeli/laporan', $data, FALSE);
    }

    public function laporan_pembeli()
    {
        $data['login'] = $this->db->get_where('login_anggota', ['username' => $this->session->userdata('username')])->row();

        $laporan = $this->Model_tanam->getAllTransaksi($data['login']->id_anggota);

        $data = array(
            'laporan' => $laporan,
        );

        $this->load->view('pembeli/laporan_pembeli', $data, FALSE);
    }

    public function konfirmasi($id_anggota = '')
    {
        $data['title'] = 'Konfirmasi Bayar';
        $data['header_transaksi'] = $this->Model_tanam->id_header_transaksi($id_anggota);
        $data['rekpenj'] = $this->Model_tanam->getRekeningPenjual($id_anggota);
        // echo '<pre>';
        // print_r($data);
        // die;
        // echo '</pre>';
        $this->load->view('pembeli/konfirmasi_bayar', $data, FALSE);
    }

    public function konfirm_bayar($id_header_transaksi)
    {
        $header_transaksi = $this->Model_tanam->id_header_transaksi($id_header_transaksi);
        $rekening = $this->Model_tanam->getRekeningfromTanamPanen();
        $this->form_validation->set_rules('nama_bank', 'Nama Bank', 'required|trim', [
            'required' => '%s harus diisi',
        ]);
        $this->form_validation->set_rules('rekening_pembayaran', 'Nomor Rekening', 'required|trim', [
            'required' => '%s harus diisi',
        ]);
        $this->form_validation->set_rules('rekening_pelanggan', 'Atas Nama', 'required|trim', [
            'required' => '%s harus diisi',
        ]);
        $this->form_validation->set_rules('tanggal_bayar', 'Tanggal Bayar', 'required|trim', [
            'required' => '%s harus diisi',
        ]);
        $this->form_validation->set_rules('jumlah_bayar', 'Jumlah Bayar', 'required|trim', [
            'required' => '%s harus diisi',
        ]);

        if ($this->form_validation->run() == false) {
            $data = array(
                'title' => 'Konfirmasi Bayar',
                'header_transaksi' => $header_transaksi,
                'rekening' => $rekening,
            );
            $this->load->view('pembeli/konfirmasi_bayar', $data, FALSE);
        } else {
            $this->load->library('upload');
            $bkb = "file_" . time(); //nama file + fungsi time
            $config['upload_path'] = './uploads/bayar/'; //Folder untuk menyimpan hasil upload
            $config['allowed_types'] = 'gif|jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
            $config['max_size'] = '3072'; //maksimum besar file 3M
            $config['max_width']  = '5000'; //lebar maksimum 5000 px
            $config['max_height']  = '5000'; //tinggi maksimu 5000 px
            $config['filename'] = $bkb; //nama yang terupload nantinya

            $this->upload->initialize($config);

            if ($_FILES['bukti_bayar']['name']) {
                if ($this->upload->do_upload('bukti_bayar')) {
                    $gambar = $this->upload->data();
                    $data = array(
                        'status_bayar' => 1, 'status_bayar' => 1,
                        'bukti_bayar' => $gambar['file_name'],
                        'jumlah_bayar' => $this->input->post('jumlah_bayar'),
                        'rekening_pembayaran' => $this->input->post('rekening_pembayaran'),
                        'rekening_pelanggan' => $this->input->post('rekening_pelanggan'),
                        'id_rekening' => $this->input->post('id_rekening'),
                        'tanggal_bayar' => $this->input->post('tanggal_bayar'),
                        'nama_bank' => $this->input->post('nama_bank')
                    );

                    // echo '<pre>';
                    // print_r($data);
                    // die;
                    // echo '</pre>';
                    $this->db->where('id_header_transaksi', $id_header_transaksi);
                    $this->db->update('header_transaksi', $data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pembayaran Berhasil
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>');
                    redirect(base_url('Vtanam_panen/riwayat_pesan'));
                }
            }
            // if (!empty($_FILES['bukti_bayar']['name'])) {
            //     $config['upload_path'] = './uploads/bayar/';
            //     $config['allowed_types'] = 'gif|jpg|png|jpeg';
            //     $config['max_size'] = '2400';
            //     $config['max_width'] = '2024';
            //     $config['max_height'] = '2024';

            //     $this->load->library('upload', $config);
            //     // $this->upload->initialize($config);
            //     if (!$this->upload->do_upload('bukti_bayar')) {
            //         $data = array(
            //             'title' => 'Konfirmasi Bayar',
            //             'header_transaksi' => $header_transaksi,
            //             'rekening' => $rekening,
            //             // 'error' => $this->upload->display_errors(),
            //         );
            //         $this->load->view('pembeli/konfirmasi_bayar', $data, FALSE);
            //     } else {
            //         $upload_gambar = array('upload_data' => $this->upload->data());
            //         $config['image_library'] = 'gd2';
            //         $config['source_image'] = './uploads/bayar/' . $upload_gambar['upload_data']['file_name'];
            //         $config['new_image'] = './uploads/bayar/';
            //         $config['create_thumb'] = TRUE;
            //         $config['maintain_ratio'] = TRUE;
            //         $config['width'] = 250;
            //         $config['height'] = 250;
            //         $config['thumb_maker'] = '';

            //         $this->load->library('image_lib', $config);
            //         $this->image_lib->resize();

            //         $id_header_transaksi = $header_transaksi->id_header_transaksi;
            //         $data = array(
            //             'status_bayar' => 1,
            //             'jumlah_bayar' => $this->input->post('jumlah_bayar'),
            //             'rekening_pembayaran' => $this->input->post('rekening_pembayaran'),
            //             'rekening_pelanggan' => $this->input->post('rekening_pelanggan'),
            //             'bukti_bayar' => $upload_gambar['upload_data']['file_name'],
            //             'id_rekening' => $this->input->post('id_rekening'),
            //             'tanggal_bayar' => $this->input->post('tanggal_bayar'),
            //             'nama_bank' => $this->input->post('nama_bank'),
            //         );
            //         echo '<pre>';
            //         print_r($data);
            //         die;
            //         echo '</pre>';
            //         $this->db->where('id_header_transaksi', $id_header_transaksi);
            //         $this->db->update('header_transaksi', $data);
            //         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pembayaran Berhasil
            //         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            //             <span aria-hidden="true">&times;</span>
            //         </button>
            //         </div>');
            //         redirect(base_url('Vtanam_panen/konfirmasi'));
            //     }
            // } else {
            //     $data = array(
            //         'status_bayar' => 1,
            //         'jumlah_bayar' => $this->input->post('jumlah_bayar'),
            //         'rekening_pembayaran' => $this->input->post('rekening_pembayaran'),
            //         'rekening_pelanggan' => $this->input->post('rekening_pelanggan'),
            //         //'bukti_bayar' => $upload_gambar['upload_data']['file_name'],
            //         'id_rekening' => $this->input->post('id_rekening'),
            //         'tanggal_bayar' => $this->input->post('tanggal_bayar'),
            //         'nama_bank' => $this->input->post('nama_bank'),
            //     );
            //     // echo '<pre>';
            //     // print_r($data);
            //     // die;
            //     // echo '</pre>';
            //     $this->db->where('id_header_transaksi', $id_header_transaksi);
            //     $this->db->update('header_transaksi', $data);
            //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pembayaran Berhasil
            //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            //         <span aria-hidden="true">&times;</span>
            //     </button>
            //     </div>');
            //     redirect(base_url('Vtanam_panen/konfirm_bayar'));
            // }
        }
    }
    public function my_profile()
    {
        $data['title'] = "My Profile";
        $data['title_nav'] = "My Profile";
        $data['user'] = $this->db->get_where('login_anggota', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('pembeli/my_profile', $data);
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
            $this->load->view('pembeli/edit_profile', $data);
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
                    redirect('VTanam_panen/my_profile');
                } else {
                    die("gagal update data");
                }
            } else {
                $data = array(
                    'no_telp'               => $no_telp,
                    'no_rekening'           => $no_rekening,
                    'alamat'                => $alamat,
                );
                // print_r($data);
                // print_r($id);
                // hapus foto pada direktori
                $this->Model_petani->updateAnggota($data, $where);
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success" role="alert"> Selamat akun anda terupdate 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('VTanam_panen/my_profile');
            }
        }
    }
}

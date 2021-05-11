<?php 
defined('BASEPATH') OR exit('No direct access allowed');
class Auth extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
      
    $this->load->model('Model_users');
    $this->load->library('session');
    $this->load->helper('text');
  }
  public function index(){
    $this->load->view('system_view/login/login');
  }
  function ceklogin(){

      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $q = $this->db->query("SELECT * FROM login_anggota WHERE username='$username' AND password='$password'");
      if ($q->num_rows() > 0) {
        $d = $this->db->get_where('login_anggota',array('username'=>$username, 'password' => $password))->row();
        $nama = $q->row()->username;
        $this->session->set_userdata('username',$nama);
        if($d->id_akses == 'admin'){
          redirect('dash');
        }elseif($d->id_akses == 'petani'){
          redirect('dash_petani');
        }elseif($d->id_akses == 'pembeli'){
          redirect('pembeli');
        }
      }else{
         //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
         $this->session->set_flashdata('message', 'Username dan Password anda salah'); // Buat session flashdata
        redirect('auth', $data);
      }
    }
 

  function logout()
  {
    $this->session->sess_destroy(); 
    $data['logout'] = 'Anda sudah logout.';
    redirect(base_url('auth'));
  }

}

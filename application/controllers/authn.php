<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authn extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email','Email', 'required|trim|valid_email'); 
        $this->form_validation->set_rules('pass_user','Kata Sandi', 'required|trim');

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates_admin/header');
            $this->load->view('form_login');
            $this->load->view('templates_admin/footer');
        }else{
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $pass_user = $this->input->post('pass_user');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if($user){
            if(password_verify($pass_user, $user['pass_user'])){
                $data = [
                    'id_user'   => $user['id_user'],
                    'nama_user' => $user['nama_user'],
                    'email'     => $user['email'],
                    'role_id'   => $user['role_id'],
                ];
                $this->session->set_userdata($data);
                    if($user['role_id'] == 1){
                        redirect('admin/dashboard');
                    }else{
                        redirect('customer/dashboard');
                    }
            }else{
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible
                fade show" role="alert"> Kata Sandi Salah ! .
                        <button type="button" class="close" data-dismiss="alert"
                            aria-label="Close"
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
                redirect('authn');
            }
        }else{
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible
            fade show" role="alert"> Email Tidak Terdaftar ! .
                    <button type="button" class="close" data-dismiss="alert"
                        aria-label="Close"
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
            redirect('authn');  
        }
    }

    public function registrasi()
    {
        $this->form_validation->set_rules('nama_user','Nama', 'required|trim');
        $this->form_validation->set_rules('email','Email', 'required|trim|valid_email|is_unique[user.email]',['is_unique' => 'Email Sudah didaftarkan']);
        $this->form_validation->set_rules('alamat_user','Alamat', 'required|trim');
        $this->form_validation->set_rules('no_tlp','Nomor Telepon', 'required|trim');
        $this->form_validation->set_rules('pass_user1','Kata Sandi', 'required|trim|min_length[6]|matches[pass_user2]',[ 'matches' => 'Kata Sandi Tidak Sesuai !', 'min_lenght' => 'Kata Sandi Terlalu Pendek !']);
        $this->form_validation->set_rules('pass_user2','Kata Sandi', 'required|trim|min_length[6]|matches[pass_user1]');

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates_admin/header');
            $this->load->view('register_form');
            $this->load->view('templates_admin/footer');
        }else{
           $data = [
               'nama_user'   => htmlspecialchars($this->input->post('nama_user', true)),
               'email'       => htmlspecialchars($this->input->post('email', true)),
               'alamat_user' => $this->input->post('alamat_user'),
               'no_tlp'      => $this->input->post('no_tlp'),
               'gambar_user' => 'default.jpg',
               'pass_user'   => password_hash( $this->input->post('pass_user1'), PASSWORD_DEFAULT),
               'role_id'     => 2,
               'tanggal_buat'=> time()
           ];

           $this->rental_model->insert_data($data,'user');
           $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible
                    fade show" role="alert"> Berhasil Daftar, Silahkan Masuk ! .
                <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close"
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
           redirect('authn');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible
                    fade show" role="alert"> Anda Berhasil Keluar ! .
                <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close"
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
           redirect('authn');
    }
    
}
?>
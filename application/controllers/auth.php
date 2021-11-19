<?php

class Auth extends CI_Controller{

    public function login()
    {
        $this->_rules();

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates_admin/header');
            $this->load->view('form_login');
            
           
        }else{
            $username   = $this->input->post('username');
            $pass       = md5 ($this->input->post('pass'));

            $cek = $this->rental_model->cek_login('$username, $pass');
           

            if($cek == FALSE)
            {
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible
                    fade show" role="alert"> Nama Pengguna atau Kata Sandi Salah ! .
                <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close"
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('auth/login');
            }else{
                $this->session->set_userdata('id_customer', $cek->id_customer);
                $this->session->set_userdata('username', $cek->username);
                $this->session->set_userdata('role_id', $cek->role_id);
                $this->session->set_userdata('nama', $cek->nama);

                switch ($cek->role_id) {
                    case 1 : redirect   ('admin/dashboard');
                             break;
                    case 2 : redirect   ('customer/dashboard');
                             break;

                    default: break;
                }
            }
        }

        
    }

    public function _rules()
    {
        $this->form_validation->set_rules('username','Nama Pengguna','required');
        $this->form_validation->set_rules('pass','Kata Sandi','required');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('customer/dashboard');
    }

    public function ganti_password()
    {
         $this->load->view('templates_admin/header');
            $this->load->view('ganti_password');
    }

    public function ganti_password_aksi()
    {
        $pass_baru = $this->input->post('pass_baru');
        $ulang_pass = $this->input->post('ulang_pass');

        $this->form_validation->set_rules('pass_baru','Kata Sandi Baru','required|matches[ulang_pass]');
        $this->form_validation->set_rules('ulang_pass','Ulangi Kata Sandi','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates_admin/header');
            $this->load->view('ganti_password');
        }else{
            $data = array('pass' =>md5($pass_baru));
            $id = array('id_customer' => $this->session->userdata('id_customer'));

            $this->rental_model->update_pass($id,$data,'customer'); 
             $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible
                    fade show" role="alert"> Kata Sandi berhasil diubah, Silahkan Login Kembali !
                <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close"
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('auth/login');
        }
    }
}

?>
<?php

    class Login extends CI_Controller
    {
        public function __construct(){
            parent::__construct();
            $this->load->model('login_model');
        }
    
        public function index(){
            $this->load->view('form_login');
        }
    
        public function auth(){
            $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
            $pass=htmlspecialchars($this->input->post('pass',TRUE),ENT_QUOTES);
    
            $cek_adminn=$this->login_model->auth_adminn($username,$pass);
    
            if($cek_adminn->num_rows() > 0){ //jika login sebagai adminn
                $data=$cek_adminn->row_array();
                $this->session->set_userdata('masuk',TRUE);
                if($data['role_id']=='1'){ //Akses admin
                    $this->session->set_userdata('akses','1');
                    $this->session->set_userdata('username',$data['username']);
                    $this->session->set_userdata('nama_admin',$data['nama_admin']);
                    redirect('admin/dashboard');
    
            }else{ //jika login sebagai customer
                $cek_customer=$this->login_model->auth_customer($username,$pass);
                if($cek_customer->num_rows() > 0){
                $data=$cek_customer->row_array();
                $this->session->set_userdata('masuk',TRUE);
                    $this->session->set_userdata('akses','2');
                    $this->session->set_userdata('username',$data['username']);
                    $this->session->set_userdata('nama',$data['nama']);
                    redirect('customer/dashboard');
                }else{  // jika username dan pass tidak ditemukan atau salah
                    echo $this->session->set_flashdata('pesan','Nama Pengguna Atau Kata Sandi Salah');
                    redirect('form_login');
                }
            }
    
        }
    
        }
    }

?>
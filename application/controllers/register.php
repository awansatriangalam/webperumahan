<?php

class Register Extends CI_Controller{

    public function index()
    {
        $this->_rules();
        
        if($this->form_validation->run() == FALSE){
            $this->load->view('templates_admin/header');
            $this->load->view('register_form');
           
        }else{
            $nama                   = $this->input->post('nama');
            $username               = $this->input->post('username');
            $alamat                 = $this->input->post('alamat');
            $no_tlp                 = $this->input->post('no_tlp');
            $email_customer         = $this->input->post('email_customer');
            $pass                   = md5($this->input->post('pass'));
            $role_id                = '2';

            $data = array (
                'nama'              => $nama,
                'username'          => $username,
                'alamat'            => $alamat,
                'no_tlp'            => $no_tlp,
                'email_customer'    => $email_customer,
                'pass'              => $pass,
                'role_id'           => $role_id
            );
       
                $this->rental_model->insert_data($data,'customer');
                $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible
                    fade show" role="alert"> Berhasil Daftar, Silahkan Masuk ! .
                <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close"
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('auth/login');    
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('no_tlp','No Telepon','required');
        $this->form_validation->set_rules('email_customer','Email','required');
        $this->form_validation->set_rules('pass','Katasandi','required');
        
    }
}
?>
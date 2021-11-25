<?php 

class Dashboard extends CI_Controller{

    public function __construct(){
            parent::__construct();

            if($this->session->userdata('role_id') !='2'){
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Anda Belum Login!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>');
                        redirect('authn');
            }
        }

    public function kirim_ulasan() 
    {
       $id_user     = $this->session->userdata('id_user');
       $id_rumah        = $this->input->post('id_rumah');
       $id_ulasan              = $this->input->post('id_ulasan');
       $nama_user            = $this->input->post('nama_user');
       $email          = $this->input->post('email');
       $ulasan          = $this->input->post('ulasan');

       $data = array (
        'id_user'       => $id_user,
        'id_rumah'          => $id_rumah,
        'id_ulasan'         => $id,
        'nama_user'         => $nama_user,
        'email'             => $email,
        'ulasan'            => $ulasan,
    );
       $this->rental_model->insert_data($data,'ulas');
       redirect('welcome/detail_rumah/'.$id_rumah);
    }
    

    public function profil() 
    {
        $data['user']  = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); 
        $this->load->view('templates_customer/header');
        $this->load->view('customer/profil', $data);
        $this->load->view('templates_customer/footer');
    }

    

    public function _rules()
    {
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('username','Nama Pengguna','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('no_tlp','No Telepon','required');
        $this->form_validation->set_rules('no_ktp','No KTP','required');
        $this->form_validation->set_rules('pass','Katasandi','required');
    }

}

?>
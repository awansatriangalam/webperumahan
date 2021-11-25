<?php 

class Dashboard extends CI_Controller{
    public function index() 
    {
        $data['rumah'] = $this->rental_model->get_data('rumah')->result();
        $this->load->view('templates_customer/header');
        $this->load->view('customer/dashboard', $data);
        $this->load->view('templates_customer/footer');
    }

    public function detail_rumah($id) 
    {
        $data['detail'] = $this->rental_model->ambil_id_rumah($id);
        $data['ulas']  = $this->rental_model->ambil_id_ulasan($id);       
        $data['rumah']  = $this->rental_model->get_data('rumah')->result();
        $customer = $this->session->userdata('id_user');
        $data['customer']= $this->db->query("SELECT * FROM user cs WHERE cs.id_user='$customer'")->result();
        $this->load->view('templates_customer/header');
        $this->load->view('customer/detail_rumah', $data);
        $this->load->view('templates_customer/footer');
    }

    public function kirim_ulasan() 
    {
       $id_user     = $this->session->userdata('id_user');
       $id_rumah        = $this->input->post('id_rumah');
       $id              = $this->input->post('id_ulasan');
       $nama_user       = $this->input->post('nama_user');
       $email           = $this->input->post('email');
       $ulasan          = $this->input->post('ulasan');

       $data = array (
        'id_customer'       => $id_customer,
        'id_rumah'          => $id_rumah,
        'id_ulasan'         => $id,
        'nama_user'         => $nama_user,
        'email'             => $email,
        'ulasan'            => $ulasan,
    );
       $this->rental_model->insert_data($data,'ulas');
       redirect('customer/dashboard/detail_rumah/'.$id_rumah);
    }

}

?>
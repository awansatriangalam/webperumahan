<?php 

class Kontak extends CI_Controller{
    public function index() 
    {
        $data['rumah'] = $this->rental_model->get_data('rumah')->result();
        $this->load->view('templates_customer/header');
        $this->load->view('customer/kontak', $data);
        $this->load->view('templates_customer/footer');
    }
}

?>
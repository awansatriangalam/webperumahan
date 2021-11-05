<?php 

class Privasi extends CI_Controller{
    public function index() 
    {
        $this->load->view('templates_customer/header');
        $this->load->view('customer/privasi');
        $this->load->view('templates_customer/footer');
    }
}

?>
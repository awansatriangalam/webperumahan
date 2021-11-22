<?php 

class Panduan extends CI_Controller{
    public function index() 
    {
        $this->load->view('templates_customer/header');
        $this->load->view('customer/panduan');
        $this->load->view('templates_customer/footer');
    }
}

?>
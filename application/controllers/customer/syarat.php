<?php 
	
class Syarat extends CI_Controller{
    public function index() 
    {
        $this->load->view('templates_customer/header');
        $this->load->view('customer/syarat');
        $this->load->view('templates_customer/footer');
    }
}

 ?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Rumah extends CI_Controller {
  
  public function index(){
    $data['rumah'] = $this->rental_model->get_data('rumah')->result();    
    $this->load->view('templates_customer/header');
    $this->load->view('customer/rumah', $data);
    $this->load->view('templates_customer/footer');
  }
}

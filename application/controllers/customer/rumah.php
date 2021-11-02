<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Rumah extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('Search_model');
  }
  public function index(){
    $data['rumah'] = $this->Search_model->view();
    $this->load->view('templates_customer/header');
    $this->load->view('customer/rumah', $data);
    $this->load->view('templates_customer/footer');
  }
  
  public function search(){
    // Ambil data NIS yang dikirim via ajax post
    $keyword = $this->input->post('keyword');
    $rumah = $this->Search_model->search($keyword);
    
    // Kita load file view.php sambil mengirim data rumah hasil query function search di Search_model
    $hasil = $this->load->view('customer/pencarian', array('rumah'=>$rumah), true);
    
    // Buat sebuah array
    $callback = array(
      'hasil' => $hasil, // Set array hasil dengan isi dari view.php yang diload tadi
    );
    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }
}
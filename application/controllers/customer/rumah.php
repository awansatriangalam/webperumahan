<?php
  class Rumah extends CI_Controller {
  
  public function index()
    {
      $lokasi = $this->input->post('kota');
      $tipe = $this->input->post('kode_type');
      $bed = $this->input->post('kamar_tidur');
      $bath = $this->input->post('kamar_mandi');
      $data['rumah'] = $this->rental_model->get_data('rumah')->result(); 

      $this->_rules();
      
      if($this->form_validation->run()== FALSE) {
          $this->load->view('templates_customer/header');
          $this->load->view('customer/rumah',$data);
          $this->load->view('templates_customer/footer');
      }else{
        $data1['filter'] = $this->db->query("SELECT * FROM rumah WHERE id_rumah option (kota) == '$lokasi' AND option (kode_type) == '$tipe' AND option (kamar_tidur) == '$bed' AND option (kamar_mandi) == '$bath' ")->result();
        $this->load->view('templates_customer/header');
        $this->load->view('customer/filterrumah',$data1);
        $this->load->view('templates_customer/footer');
      }
    }
    
  public function _rules()
    {
      $this->form_validation->set_rules('kota','Tanggal');
      $this->form_validation->set_rules('kode_type','Tanggal');
      $this->form_validation->set_rules('status','Tanggal');
      $this->form_validation->set_rules('kamar_tidur','Tanggal');
      $this->form_validation->set_rules('kamar_mandi','Tanggal');
    }
  
}

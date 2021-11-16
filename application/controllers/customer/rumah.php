<?php
  class Rumah extends CI_Controller {
  
    public function index()
      {
        $data['rumah'] = $this->rental_model->get_data('rumah')->result(); 
        $this->load->view('templates_customer/header');
        $this->load->view('customer/rumah',$data);
        $this->load->view('templates_customer/footer');
      }

      public function filter()
      {
        if(isset($_GET['cari'])){
          $lk = $_GET['lokasi'];
          $ktipe = $_GET['kode_type'];
          $ktd = $_GET['kamar_tidur'];
          $km = $_GET['kamar_mandi'];
          $data['filter']   = $this->db->query("SELECT * FROM rumah WHERE lokasi like '%$lk%' AND kode_type like '%$ktipe%' AND kamar_tidur like '%$ktd%' AND kamar_mandi like '%$km%' ")->result();
        }else{
          $data['filter']   = $this->rental_model->get_data('rumah')->result(); 
        }
        $data['rumah'] = $this->rental_model->get_data('rumah')->result();
        $this->load->view('templates_customer/header');
        $this->load->view('customer/filterrumah',$data);
        $this->load->view('templates_customer/footer');
      }
  }
?>  
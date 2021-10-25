<?php 

class Pencarian extends CI_Controller{
    public function index() 
    {
        $data['rumah'] = $this->rental_model->get_data('rumah')->result();
        $data['rumah'] = $this->rental_model->pencarian('rumah')->result();
        $lokasi     =$this->input->get('lokasi');
        $kode_type  =$this->input->get('kode_type');
        $status     =$this->input->get('status');
        $kamar_tidur=$this->input->get('kamar_tidur');
        $kamar_mandi=$this->input->get('kamar_mandi');
        $this->load->view('templates_customer/header');
        $this->load->view('customer/pencarian', $data);
        $this->load->view('templates_customer/footer');
    }
}

?>
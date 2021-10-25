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
        $data['rumah'] = $this->rental_model->get_data('rumah')->result();
        $this->load->view('templates_customer/header');
        $this->load->view('customer/detail_rumah', $data);
        $this->load->view('templates_customer/footer');
    }

}

?>
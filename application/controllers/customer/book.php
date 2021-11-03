<?php

class book extends CI_Controller{

    public function index()
    {
        $customer = $this->session->userdata('id_customer');
        $data['transaksi']= $this->db->query("SELECT * FROM transaksi tr, rumah rm, customer cs WHERE tr.id_rumah=rm.id_rumah AND tr.id_customer=cs.id_customer AND cs.id_customer='$customer' ORDER BY id_pesan ASC")->result();
        $this->load->view('templates_customer/header');
        $this->load->view('customer/book', $data);
        $this->load->view('templates_customer/footer');
    }
}
?>
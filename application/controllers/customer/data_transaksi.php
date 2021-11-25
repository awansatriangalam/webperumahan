<?php

class Data_transaksi extends CI_Controller{

    public function index()
    {
        $customer = $this->session->userdata('id_user');
        $data['transaksi']= $this->db->query("SELECT * FROM transaksi tr, rumah rm, user cs WHERE tr.status_transaksi='1' AND tr.id_rumah=rm.id_rumah AND tr.id_user=cs.id_user AND cs.id_user='$customer' ORDER BY id_pesan ASC")->result();
        $this->load->view('templates_customer/header');
        $this->load->view('customer/data_transaksi', $data);
        $this->load->view('templates_customer/footer');
    }
}
?>
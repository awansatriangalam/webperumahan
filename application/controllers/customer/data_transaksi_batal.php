<?php

class Data_transaksi_batal extends CI_Controller{

    public function index()
    {
        $customer = $this->session->userdata('id_user');
        $data['transaksi']= $this->db->query("SELECT * FROM transaksi tr, rumah rm, user cs WHERE tr.status_transaksi='0' AND tr.id_rumah=rm.id_rumah AND tr.id_user=cs.id_user AND cs.id_user='$customer' ORDER BY id_pesan ASC")->result();
        $this->load->view('templates_customer/header');
        $this->load->view('customer/data_transaksi_batal', $data);
        $this->load->view('templates_customer/footer');
    }
}
?>
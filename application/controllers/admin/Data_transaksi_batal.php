<?php

    class Data_transaksi_batal extends CI_Controller{
        
        public function index()
        {
            $data['transaksi']= $this->db->query("SELECT * FROM transaksi tr, rumah rm, user cs WHERE tr.id_rumah=rm.id_rumah AND tr.status_transaksi='0' AND tr.id_user=cs.id_user")->result();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/data_transaksi_batal',$data);
            $this->load->view('templates_admin/footer');
        }
    }

?>
<?php
	
	class Transaksi extends CI_Controller{

		public function index()
		{
            $data['transaksi']= $this->db->query("SELECT * FROM transaksi tr, rumah rm, customer cs WHERE tr.id_rumah=rm.id_rumah AND tr.id_customer=cs.id_customer")->result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/data_transaksi', $data);
			$this->load->view('templates_admin/footer');
		}
	}
	
?>
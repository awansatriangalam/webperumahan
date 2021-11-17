<?php
	
	class Dashboard extends CI_Controller{

		public function index()
		{
			$customer = $this->session->userdata('id_customer');
			$data['pesan']= $this->db->query("SELECT * FROM pesan ps, customer cs WHERE ps.id_pesan=id_pesan AND cs.id_customer='$customer'")->result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/dashboard',$data);
			$this->load->view('templates_admin/footer');
		}
	}
	
?>
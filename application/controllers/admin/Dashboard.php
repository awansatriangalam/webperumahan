<?php
	
	class Dashboard extends CI_Controller{

		public function index()
		{
			$customer = $this->session->userdata('id_user');
			$data['pesan']= $this->db->query("SELECT * FROM pesan ps, user cs WHERE ps.id_pesan=id_pesan AND cs.id_user='$customer'")->result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/dashboard',$data);
			$this->load->view('templates_admin/footer');
		}
	}
	
?>
<?php
	
	class Profil extends CI_Controller{
		public function index()
		{
			$data['user']  = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); 
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar',$data);
			$this->load->view('admin/profil',$data);
			$this->load->view('templates_admin/footer');
		}
	}
	
?>
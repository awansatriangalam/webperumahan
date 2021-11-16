<?php
	
	class Dashboard extends CI_Controller{

		public function index()
		{
			$data['pesan']= $this->rental_model->get_data('pesan')->result();

			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/dashboard',$data);
			$this->load->view('templates_admin/footer');
		}
	}
	
?>
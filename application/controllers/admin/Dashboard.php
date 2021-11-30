<?php
	
	class Dashboard extends CI_Controller{

		public function __construct(){
			parent::__construct();

			$this->load->model('Chart_model');

			if($this->session->userdata('role_id') !='1'){
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
 				Anda Belum Login!
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>');
						redirect('authn');
			}
		}

		public function index()
		{
			$customer = $this->session->userdata('id_user');
			$data['jumlah_tipe'] = $this->M_tipe->jumlah_tipe();
			$data['jumlah_admin'] = $this->M_user->jumlah_admin();
			$data['jumlah_rumah'] = $this->M_rumah->jumlah_rumah();
			$data['jumlah_customer'] = $this->M_user->jumlah_customer();
			$data['user']  = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); 
			$data['pesan'] = $this->rental_model->get_data('pesan')->result();
			foreach($this->Chart_model->chart()->result_array() as $row)
			{
				$chart['grafik'][]=(float)$row['Januari'];
				$chart['grafik'][]=(float)$row['Februari'];
				$chart['grafik'][]=(float)$row['Maret'];
				$chart['grafik'][]=(float)$row['April'];
				$chart['grafik'][]=(float)$row['Mei'];
				$chart['grafik'][]=(float)$row['Juni'];
				$chart['grafik'][]=(float)$row['Juli'];
				$chart['grafik'][]=(float)$row['Agustus'];
				$chart['grafik'][]=(float)$row['September'];
				$chart['grafik'][]=(float)$row['Oktober'];
				$chart['grafik'][]=(float)$row['November'];
				$chart['grafik'][]=(float)$row['Desember'];
			}
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar',$data);
			$this->load->view('admin/dashboard',$chart,$data);
			$this->load->view('templates_admin/footer');
		}
	}
	
?>
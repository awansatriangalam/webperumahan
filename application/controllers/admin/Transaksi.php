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

		public function pembayaran($id)
		{
			$where = array ('id_pesan' => $id);
			$data['pembayaran'] = $this->db->query("SELECT * FROM transaksi WHERE id_pesan='$id'")->result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/konfirmasi_pembayaran', $data);
			$this->load->view('templates_admin/footer');
		}

		public function cek_pembayaran()
		{
			$id				= $this->input->post('id_pesan');
			$status_bayar	= $this->input->post('status_bayar');

			$data = array (
				'status_bayar'	=> $status_bayar,
			);

			$where = array (
				'id_pesan'		=> $id
			);

			$this->rental_model->update_data('transaksi', $data,$where);
			redirect('admin/transaksi');
		}

		public function download_bukti($id)
		{
			$this->load->helper('download');
			$filePembayaran = $this->rental_model->downloadBukti($id);
			$file = 'assets/upload/' .$filePembayaran['bukti_bayar'];
			force_download($file, NULL);
		}
	}
	
?>
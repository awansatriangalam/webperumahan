<?php
	
	class Transaksi extends CI_Controller{

		public function index()
		{
			$dari = $this->input->post('dari');
            $sampai = $this->input->post('sampai');
            $this->_rules();

            if($this->form_validation->run()== FALSE) {
				$data['transaksi']= $this->db->query("SELECT * FROM transaksi tr, rumah rm, user cs WHERE tr.id_rumah=rm.id_rumah AND tr.id_user=cs.id_user")->result();
                $this->load->view('templates_admin/header');
                $this->load->view('templates_admin/sidebar');
                $this->load->view('admin/data_transaksi',$data);
                $this->load->view('templates_admin/footer');
            }else{
                $data['ftransaksi'] = $this->db->query("SELECT * FROM transaksi tr, rumah rm, customer cs WHERE tr.id_rumah=rm.id_rumah AND tr.id_customer=cs.id_customer AND date (tanggal_transaksi) >= '$dari' AND date (tanggal_transaksi) <= '$sampai' ")->result();
                $this->load->view('templates_admin/header');
                $this->load->view('templates_admin/sidebar');
                $this->load->view('admin/filter_transaksi',$data);
                $this->load->view('templates_admin/footer');
            }
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

		public function transaksi_selesai($id)
		{
			$where = array ('id_pesan' => $id);
			$data['transaksi'] = $this->db->query("SELECT * FROM transaksi WHERE id_pesan='$id'")->result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/transaksi_selesai', $data);
			$this->load->view('templates_admin/footer');
		}

		public function transaksi_selesai_aksi()
		{
			$id 			= $this->input->post('id_pesan');
			$status_pesan 	= $this->input->post('status_pesan');

			$data = array (
				'status_pesan' => $status_pesan
			);

			$where = array (
				'id_pesan'		=> $id
			);

			$this->rental_model->update_data('transaksi',$data,$where);
			redirect('admin/transaksi');
		}

		public function transaksi_batal($id)
		{
			$where = array ('id_pesan' =>$id);
			$data = $this->rental_model->get_where($where,'transaksi')->row();
			
			$where2 = array ('id_rumah' => $data->id_rumah);
			
			$data2 = array ('status' => '1');

			$this->rental_model->update_data('rumah', $data2,$where2);
			$this->rental_model->delete_data($where,'transaksi');
			redirect('admin/transaksi');
		}

		public function _rules()
        {
            $this->form_validation->set_rules('dari','Tanggal','required');
            $this->form_validation->set_rules('sampai','Tanggal','required');
        }

	}
	
?>
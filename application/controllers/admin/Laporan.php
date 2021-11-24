<?php
	
	class Laporan extends CI_Controller{

		public function index()
		{
            $dari = $this->input->post('dari');
            $sampai = $this->input->post('sampai');
            $this->_rules();

            if($this->form_validation->run()== FALSE) {
                $this->load->view('templates_admin/header');
                $this->load->view('templates_admin/sidebar');
                $this->load->view('admin/filter_laporan');
                $this->load->view('templates_admin/footer');
            }else{
                $data['laporan'] = $this->db->query("SELECT * FROM transaksi tr, rumah rm, user cs WHERE tr.id_rumah=rm.id_rumah AND tr.id_user=cs.id_user AND date (tanggal_transaksi) >= '$dari' AND date (tanggal_transaksi) <= '$sampai' ")->result();
                $this->load->view('templates_admin/header');
                $this->load->view('templates_admin/sidebar');
                $this->load->view('admin/tampil_laporan',$data);
                $this->load->view('templates_admin/footer');
            }
        	
		}

        public function print_laporan()
        {
            $dari = $this->input->get('dari');
            $sampai = $this->input->get('sampai');
            $data['laporan'] = $this->db->query("SELECT * FROM transaksi tr, rumah rm, user cs WHERE tr.id_rumah=rm.id_rumah AND tr.id_user=cs.id_user AND date (tanggal_transaksi) >= '$dari' AND date (tanggal_transaksi) <= '$sampai' ")->result();
            $this->load->view('templates_admin/header');
            $this->load->view('admin/print_laporan',$data);
        }

        public function _rules()
        {
            $this->form_validation->set_rules('dari','Tanggal','required');
            $this->form_validation->set_rules('sampai','Tanggal','required');
        }
	}
	
?>
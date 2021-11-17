<?php
	
	class Data_customer extends CI_Controller{

		public function index()
		{
            $data['customer']= $this->rental_model->get_data('customer')->result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/data_customer',$data);
			$this->load->view('templates_admin/footer');
		}

        public function tambah_customer()
        {
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/form_tambah_customer');
			$this->load->view('templates_admin/footer'); 
        }

        public function tambah_customer_aksi()
        {
            $this->_rules();

            if($this->form_validation->run() == FALSE) {
                $this->tambah_customer();
            }else{
                $nama               = $this->input->post('nama');
                $username           = $this->input->post('username');
                $alamat             = $this->input->post('alamat');
                $no_tlp             = $this->input->post('no_tlp');
                $email_customer     = $this->input->post('email_customer');
                $pass               = md5($this->input->post('pass'));

                $data = array(
                    'nama'              => $nama,
                    'username'          => $username,
                    'alamat'            => $alamat,
                    'no_tlp'            => $no_tlp,
                    'email_customer'    => $email_customer,
                    'pass'              => $pass,
                );

                $this->rental_model->insert_data($data, 'customer');
                $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible
                    fade show" role="alert"> Data Customer Berhasil Ditambahkan !.
                <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close"
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('admin/data_customer'); 
            }
        }

        public function update_customer($id)
        {
            $where = array('id_customer' => $id) ;
            $data['customer'] = $this->db->query("SELECT * FROM customer WHERE id_customer = $id")->result();

            $this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/form_update_customer',$data);
			$this->load->view('templates_admin/footer'); 
        }

        public function update_customer_aksi()
        {
            $this->_rules();

            if($this->form_validation->run() == FALSE) {
                $this->update_customer();
            }else{
                $id                 = $this->input->post('id_customer');
                $nama               = $this->input->post('nama');
                $username           = $this->input->post('username');
                $alamat             = $this->input->post('alamat');
                $no_tlp             = $this->input->post('no_tlp');
                $email_customer     = $this->input->post('email_customer');

                $data = array(
                    'nama'              => $nama,
                    'username'          => $username,
                    'alamat'            => $alamat,
                    'no_tlp'            => $no_tlp,
                    'email_customer'    => $email_customer,
                );

                $where = array(
                    'id_customer'   => $id
                );

                $this->rental_model->update_data('customer',$data,$where);
                $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible
                    fade show" role="alert"> Data Customer Berhasil Diubah !.
                <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close"
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('admin/data_customer');   
            }
        }

        public function _rules()
        {
            $this->form_validation->set_rules('nama','Nama','required');
            $this->form_validation->set_rules('username','Nama Pengguna','required');
            $this->form_validation->set_rules('alamat','Alamat','required');
            $this->form_validation->set_rules('no_tlp','No Telepon','required');
            $this->form_validation->set_rules('email_customer','Email','required');
        }

        public function delete_customer($id)
        {
            $where = array ('id_customer' => $id);
            $this->rental_model->delete_data($where, 'customer');
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible
                    fade show" role="alert"> Data Berhasil Dihapus ! .
                    <button type="button" class="close" data-dismiss="alert"
                        aria-label="Close"
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
                redirect('admin/data_customer');
        }

         public function search(){

            $keyword = $this->input->post('keyword');
            $data['data_customer'] = $this->rental_model->get_keyword_customer($keyword); 
                $this->load->view('templates_admin/header');
                $this->load->view('templates_admin/sidebar');
                $this->load->view('admin/data_customer_filter',$data);

            
        }

	}
	
?>
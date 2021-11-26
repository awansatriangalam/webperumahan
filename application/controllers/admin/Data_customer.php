<?php
	
	class Data_customer extends CI_Controller{

        public function __construct(){
            parent::__construct();

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
            $data1['user']  = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); 
            $data['user']= $this->rental_model->get_data('user')->result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar',$data1);
			$this->load->view('admin/data_customer',$data);
			$this->load->view('templates_admin/footer');
		}

        public function tambah_customer()
        {
            $data['user']  = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); 
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar', $data);
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
            $where = array('id_user' => $id) ;
            $data1['user']  = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); 
            $data['user'] = $this->db->query("SELECT * FROM user WHERE id_user = $id")->result();

            $this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar',$data1);
			$this->load->view('admin/form_update_customer',$data);
			$this->load->view('templates_admin/footer'); 
        }

        public function update_customer_aksi()
        {
            $this->_rules();

            if($this->form_validation->run() == FALSE) {
                $this->update_customer();
            }else{
                $id                 = $this->input->post('id_user');
                $nama_user          = $this->input->post('nama_user');
                $email              = $this->input->post('email');
                $alamat_user        = $this->input->post('alamat_user');
                $no_tlp             = $this->input->post('no_tlp');

                $data = array(
                    'nama_user'      => $nama_user,
                    'email'          => $email,
                    'alamat_user'    => $alamat_user,
                    'no_tlp'         => $no_tlp,
                );

                $where = array(
                    'id_user'   => $id
                );

                $this->rental_model->update_data('user',$data,$where);
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
            $this->form_validation->set_rules('nama_user','Nama','required');
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('alamat_user','Alamat','required');
            $this->form_validation->set_rules('no_tlp','No Telepon','required');
        }

        public function delete_customer($id)
        {
            $where = array ('id_user' => $id);
            $this->rental_model->delete_data($where, 'user');
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
            $data1['user']  = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); 
            $data['data_customer'] = $this->rental_model->get_keyword_customer($keyword); 
                $this->load->view('templates_admin/header');
                $this->load->view('templates_admin/sidebar',$data1);
                $this->load->view('admin/data_customer_filter',$data);
                $this->load->view('templates_admin/footer');
        }

	}
	
?>
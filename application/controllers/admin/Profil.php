<?php
	
	class Profil extends CI_Controller{

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
			$data['user']  = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); 
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar',$data);
			$this->load->view('admin/profil',$data);
			$this->load->view('templates_admin/footer');
		}

		public function edit()
		{
			$data['user']  = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			
			$this->form_validation->set_rules('nama_user','Nama', 'required|trim');
			$this->form_validation->set_rules('email','Email', 'required|trim|valid_email');
			$this->form_validation->set_rules('alamat_user','Alamat', 'required|trim');
			$this->form_validation->set_rules('no_tlp','Nomor Telepon', 'required|trim');

			if($this->form_validation->run() == FALSE){
				$this->load->view('templates_admin/header');
				$this->load->view('templates_admin/sidebar',$data);
				$this->load->view('admin/edit_profil',$data);
				$this->load->view('templates_admin/footer');
			}else{
				$id                 = $this->input->post('id_user');
                $nama_user          = $this->input->post('nama_user');
                $email              = $this->input->post('email');
                $alamat_user        = $this->input->post('alamat_user');
                $no_tlp             = $this->input->post('no_tlp');
				$gambar_user        = $_FILES['gambar_user']['name'];
				if(!$gambar_user){
					$config['upload_path'] = './assets/assets_stisla/assets/img/profil/';
					$config['allowed_types'] = 'gif|jpg|jpeg|tiff|png';	

					$this->load->library('upload', $config);

					if($this->upload->do_upload('gambar_user')) {
						$old_img = $data['user']['gambar_user'];
                        if($old_img != 'default.jpg') {
                            unlink(FCPATH . 'assets/assets_stisla/assets/img/profil/' . $old_img);
                        }
					} else {
						echo $this->upload->display_errors();
					}
				}

                $data = array(
                    'nama_user'      => $nama_user,
                    'email'          => $email,
                    'alamat_user'    => $alamat_user,
                    'no_tlp'         => $no_tlp,
					'gambar_user'	 => $gambar_user,
                );

                $where = array(
                    'id_user'   => $id
                );

                $this->rental_model->update_data('user',$data,$where);
                $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible
                    fade show" role="alert"> Profil Berhasil di Ubah !.
                <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close"
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('admin/profil');   
			}
		}

		public function ganti_password()
    {
        $data['user']  = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('sandi_lama','Kata Sandi Lama', 'required|trim');
        $this->form_validation->set_rules('sandi_baru1','Kata Sandi Baru', 'required|trim|min_length[6]|matches[sandi_baru2]');
        $this->form_validation->set_rules('sandi_baru2','Ulangi Kata Sandi Baru', 'required|trim|min_length[6]|matches[sandi_baru1]');

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar',$data);
            $this->load->view('admin/ganti_password', $data);
            $this->load->view('templates_admin/footer'); 
        }else{
            $sandi_lama = $this->input->post('sandi_lama');
            $pass_baru  = $this->input->post('sandi_baru1');
            if(!password_verify($sandi_lama, $data['user']['pass_user'])){
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible
                    fade show" role="alert"> Kata Sandi Salah !.
                <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close"
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('admin/profil/ganti_password');
            }else{
                if($sandi_lama == $pass_baru ){
                    $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible
                    fade show" role="alert"> Kata Sandi Tidak Boleh Sama  !.
                    <button type="button" class="close" data-dismiss="alert"
                        aria-label="Close"
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                    redirect('admin/profil/ganti_password');
                }else{
                    $password_hash = password_hash($pass_baru, PASSWORD_DEFAULT);

                    $this->db->set('pass_user',$password_hash);
                    $this->db->where('email',$this->session->userdata('email'));
                    $this->db->update('user');
                    $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible
                        fade show" role="alert"> Kata Sandi Berhasil di Ubah, Silahkan Masuk Kembali !.
                    <button type="button" class="close" data-dismiss="alert"
                        aria-label="Close"
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                    redirect('authn');
                }
            }
        }  
    }
	}
	
?>
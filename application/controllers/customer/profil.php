<?php

class Profil extends CI_Controller
{
    public function index() 
    {
        $data['user']  = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); 
        $this->load->view('templates_customer/header');
        $this->load->view('customer/profil', $data);
        $this->load->view('templates_customer/footer');
    }

    public function ubah_profil() 
    {
        $data['user']  = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama_user','Nama', 'required|trim');
        $this->form_validation->set_rules('email','Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('alamat_user','Alamat', 'required|trim');
        $this->form_validation->set_rules('no_tlp','Nomor Telepon', 'required|trim');

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates_customer/header');
            $this->load->view('customer/ubah_profil',$data);
            $this->load->view('templates_customer/footer');
        }else{
            $id                 = $this->input->post('id_user');
            $nama_user          = $this->input->post('nama_user');
            $email              = $this->input->post('email');
            $alamat_user        = $this->input->post('alamat_user');
            $no_tlp             = $this->input->post('no_tlp');
            $gambar_user        = $_FILES['gambar_user']['name'];
            if($gambar_user=''){}else{
                $config ['upload_path']     = './assets/assets_stisla/assets/img/profil';
                $config ['allowed_types']   = 'jpg|jpeg|png|tiff';

                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('gambar_user')){
                    echo "Gambar Gagal Diupload !";
                }else{
                    $gambar_user=$this->upload->data('file_name');
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
            redirect('customer/profil');   
        }
    }

    public function ubah_sandi()
    {
        $data['user']  = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('sandi_lama','Kata Sandi Lama', 'required|trim');
        $this->form_validation->set_rules('sandi_baru1','Kata Sandi Baru', 'required|trim|min_length[6]|matches[sandi_baru2]');
        $this->form_validation->set_rules('sandi_baru2','Ulangi Kata Sandi Baru', 'required|trim|min_length[6]|matches[sandi_baru1]');

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates_customer/header');
            $this->load->view('customer/ubah_sandi', $data);
            $this->load->view('templates_customer/footer'); 
        }else{
            $sandi_lama = $this->input->post('sandi_lama');
            $pass_baru  = $this->input->post('sandi_baru1');
            if(!password_verify($sandi_lama, $data['user']['pass_user'])){
                $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible
                    fade show" role="alert"> Kata Sandi Salah !.
                <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close"
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('customer/profil/ubah_sandi');
            }else{
                if($sandi_lama == $pass_baru ){
                    $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible
                    fade show" role="alert"> Kata Sandi Tidak Boleh Sama  !.
                    <button type="button" class="close" data-dismiss="alert"
                        aria-label="Close"
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                    redirect('customer/profil/ubah_sandi');
                }else{
                    $password_hash = password_hash($pass_baru, PASSWORD_DEFAULT);

                    $this->db->set('pass_user',$password_hash);
                    $this->db->where('email',$this->session->userdata('email'));
                    $this->db->update('user');
                    $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible
                        fade show" role="alert"> Profil Berhasil di Ubah !.
                    <button type="button" class="close" data-dismiss="alert"
                        aria-label="Close"
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                    redirect('customer/profil');
                }
            }
        }  
    }
}

?>
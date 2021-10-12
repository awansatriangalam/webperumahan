<?php

class Data_rumah extends CI_Controller{
    public function index()
    {
        $data['rumah'] = $this->rental_model->get_data('rumah')->result();
        $data['type'] = $this->rental_model->get_data('type')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_rumah',$data);
        $this->load->view('templates_admin/footer');

    }

    public function tambah_rumah()
    { 
        $data['type'] = $this->rental_model->get_data('type')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_rumah',$data);
        $this->load->view('templates_admin/footer');

    }

    public function tambah_rumah_aksi()
    {
        $this->_rules();

        if($this->form_validation->run() == FALSE) {
            $this->tambah_rumah();
        }else{
            $kode_type                      = $this->input->post('kode_type');
            $luas_bangunan                  = $this->input->post('luas_bangunan');
            $luas_tanah                     = $this->input->post('luas_tanah');
            $interior                       = $this->input->post('interior');
            $status                         = $this->input->post('status');
            $harga                          = $this->input->post('harga');
            $gambar                         = $_FILES['gambar']['name'];
            if($gambar=''){}else{
                $config ['upload_path']     = './assets/upload';
                $config ['allowed_types']   = 'jpg|jpeg|png|tiff';

                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('gambar')){
                    echo "Gambar Gagal Diupload !";
                }else{
                    $gambar=$this->upload->data('file_name');
                }
            }
            
            $data = array (
                'kode_type'             => $kode_type,
                'luas_bangunan'         => $luas_bangunan,
                'luas_tanah'            => $luas_tanah,
                'interior'              => $interior,
                'status'                => $status,
                'harga'                 => $harga,
                'gambar'                => $gambar
            );

            $this->rental_model->insert_data($data,'rumah');
            $this->session->set_flashdata('pesan','<div class="alert alert-succes alert-dismissible
                    fade show" role="alert"> Data Berhasil Ditambahkan !.
                <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close"
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('admin/data_rumah');
            }
    }

    public function _rules()
        {
            $this->form_validation->set_rules('kode_type','Kode Type','required');
            $this->form_validation->set_rules('luas_bangunan','Luas Bangunan','required');
            $this->form_validation->set_rules('luas_tanah','Luas Tanah','required');
            $this->form_validation->set_rules('interior','Interior','required');
            $this->form_validation->set_rules('status','Status','required');
            $this->form_validation->set_rules('harga','Harga','required');
        }
    
}

?>

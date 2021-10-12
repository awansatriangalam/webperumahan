<?php

class Data_rumah extends CI_Controller{
    public function index()
    {
        $data['rumah'] = $this->rental_model->get_data('rumah')->result();
        $data['tipe'] = $this->rental_model->get_data('tipe')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_rumah',$data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_rumah()
    { 
        $data['tipe'] = $this->rental_model->get_data('tipe')->result();
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
            $nama_rumah                         = $this->input->post('nama_rumah');
            $kode_type                          = $this->input->post('kode_type');
            $luas_bangunan                      = $this->input->post('luas_bangunan');
            $luas_tanah                         = $this->input->post('luas_tanah');
            $interior                           = $this->input->post('interior');
            $deskripsi                          = $this->input->post('deskripsi');
            $kamar_tidur                        = $this->input->post('kamar_tidur');
            $kamar_mandi                        = $this->input->post('kamar_mandi');
            $status                             = $this->input->post('status');
            $harga                              = $this->input->post('harga');
            $gambar                             = $_FILES['gambar']['name'];
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
                'nama_rumah'                => $nama_rumah,
                'kode_type'                 => $kode_type,
                'luas_bangunan'             => $luas_bangunan,
                'luas_tanah'                => $luas_tanah,
                'interior'                  => $interior,
                'deskripsi'                 => $deskripsi,
                'kamar_tidur'               => $kamar_tidur,
                'kamar_mandi'               => $kamar_mandi,
                'status'                    => $status,
                'harga'                     => $harga,
                'gambar'                    => $gambar,
            );

            $this->rental_model->insert_data($data,'rumah');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible
                    fade show" role="alert"> Data Berhasil Ditambahkan !.
                <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close"
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('admin/data_rumah');
            }
    }

    public function update_rumah($id){
        $where = array ('id_rumah' => $id);
        $data ['rumah'] = $this->db->query("SELECT * FROM rumah rm, tipe tp WHERE rm.kode_type=
            tp.kode_type AND rm.id_rumah='$id'")->result();
        $data ['tipe'] = $this->rental_model->get_data('tipe')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_update_rumah',$data);
        $this->load->view('templates_admin/footer');
    }

    public function update_rumah_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE)
        {
            $this->update_rumah();
        }else{
            $id                                 = $this->input->post('id_rumah');
            $nama_rumah                         = $this->input->post('nama_rumah');
            $kode_type                          = $this->input->post('kode_type');
            $luas_bangunan                      = $this->input->post('luas_bangunan');
            $luas_tanah                         = $this->input->post('luas_tanah');
            $interior                           = $this->input->post('interior');
            $deskripsi                          = $this->input->post('deskripsi');
            $kamar_tidur                        = $this->input->post('kamar_tidur');
            $kamar_mandi                        = $this->input->post('kamar_mandi');
            $status                             = $this->input->post('status');
            $harga                              = $this->input->post('harga');
            $gambar                             = $_FILES['gambar']['name'];
            if($gambar)
                {
                $config ['upload_path']     = './assets/upload';
                $config ['allowed_types']   = 'jpg|jpeg|png|tiff';

                $this->load->library('upload', $config);

                if($this->upload->do_upload('gambar')){
                    $gambar = $this->upload->data('file_name');
                    $this->db->set('gambar', $gambar);
                }else{
                    echo $this->upload->display_errors();
                }
            }
            
            $data = array (
                'nama_rumah'                => $nama_rumah,
                'kode_type'                 => $kode_type,
                'luas_bangunan'             => $luas_bangunan,
                'luas_tanah'                => $luas_tanah,
                'interior'                  => $interior,
                'deskripsi'                 => $deskripsi,
                'kamar_tidur'               => $kamar_tidur,
                'kamar_mandi'               => $kamar_mandi,
                'status'                    => $status,
                'harga'                     => $harga,
            );

            $where = array (
                'id_rumah'  => $id
            );

            $this->rental_model->update_data('rumah', $data, $where);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible
                    fade show" role="alert"> Data Berhasil Diubah !.
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
            $this->form_validation->set_rules('nama_rumah','Nama Rumah','required');
            $this->form_validation->set_rules('kode_type','Kode Type','required');
            $this->form_validation->set_rules('luas_bangunan','Luas Bangunan','required');
            $this->form_validation->set_rules('luas_tanah','Luas Tanah','required');
            $this->form_validation->set_rules('interior','Interior','required');
            $this->form_validation->set_rules('deskripsi','Deskripsi','required');
            $this->form_validation->set_rules('kamar_tidur','Kamar Tidur','required');
            $this->form_validation->set_rules('kamar_mandi','Kamar Mandi','required');
            $this->form_validation->set_rules('status','Status','required');
            $this->form_validation->set_rules('harga','Harga','required');
        }
    
}

?>

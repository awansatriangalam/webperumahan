<?php

class Data_rumah extends CI_Controller{

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
        $data['rumah'] = $this->rental_model->get_data('rumah')->result();
        $data['tipe'] = $this->rental_model->get_data('tipe')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar',$data);
        $this->load->view('admin/data_rumah',$data);
        $this->load->view('templates_admin/footer');
    }

    public function detail_rumah($id)
    {
        $data['user']  = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); 
        $data['detail'] = $this->rental_model->ambil_id_rumah($id);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar',$data);
        $this->load->view('admin/detail_rumah',$data);
        $this->load->view('templates_admin/footer');
    }



    public function tambah_rumah()
    { 
        $data['user']  = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); 
        $data['tipe'] = $this->rental_model->get_data('tipe')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar',$data);
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
            $status                             = $this->input->post('status');
            $lokasi                             = $this->input->post('lokasi');
            $kamar_tidur                        = $this->input->post('kamar_tidur');
            $kamar_mandi                        = $this->input->post('kamar_mandi');
            $ruangan                            = $this->input->post('ruangan');
            $lantai                             = $this->input->post('lantai');
            $garasi                             = $this->input->post('garasi');
            $deskripsi                          = $this->input->post('deskripsi');
            $alamat                             = $this->input->post('ruangan');
            $kota                               = $this->input->post('kota');
            $kode_pos                           = $this->input->post('kode_pos');
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
            $map                            = $_FILES['map']['name'];
            if($map=''){}else{
                $config ['upload_path']     = './assets/upload';
                $config ['allowed_types']   = 'jpg|jpeg|png|tiff';

                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('map')){
                    echo "Gambar Gagal Diupload !";
                }else{
                    $map=$this->upload->data('file_name');
                }
            }
            
            $data = array (
                'nama_rumah'                => $nama_rumah,
                'kode_type'                 => $kode_type,
                'luas_bangunan'             => $luas_bangunan,
                'status'                    => $status,
                'lokasi'                    => $lokasi,
                'kamar_tidur'               => $kamar_tidur,
                'kamar_mandi'               => $kamar_mandi,
                'ruangan'                   => $ruangan,
                'lantai'                    => $lantai,
                'garasi'                    => $garasi,
                'deskripsi'                 => $deskripsi,
                'alamat'                    => $alamat,
                'kota'                      => $kota,
                'kode_pos'                  => $kode_pos,
                'harga'                     => $harga,
                'gambar'                    => $gambar,
                'map'                       => $map,
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

    public function update_rumah($id)
    {
        $where = array('id_rumah' => $id);
        $data['user']  = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); 
        $data['rumah']  = $this->db->query("SELECT * FROM rumah, tipe WHERE rumah.kode_type=tipe.kode_type AND rumah.id_rumah='$id'")->result();
        $data['tipe']   = $this->rental_model->get_data('tipe')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar',$data);
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
            $status                             = $this->input->post('status');
            $lokasi                             = $this->input->post('lokasi');
            $kamar_tidur                        = $this->input->post('kamar_tidur');
            $kamar_mandi                        = $this->input->post('kamar_mandi');
            $ruangan                            = $this->input->post('ruangan');
            $lantai                             = $this->input->post('lantai');
            $garasi                             = $this->input->post('garasi');
            $deskripsi                          = $this->input->post('deskripsi');
            $alamat                             = $this->input->post('alamat');
            $kota                               = $this->input->post('kota');
            $kode_pos                           = $this->input->post('kode_pos');
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
            $map                            = $_FILES['map']['name'];
            if($map)
                {
                $config ['upload_path']     = './assets/upload';
                $config ['allowed_types']   = 'jpg|jpeg|png|tiff';

                $this->load->library('upload', $config);

                if($this->upload->do_upload('map')){
                    $map = $this->upload->data('file_name');
                    $this->db->set('map', $map);
                }else{
                    echo $this->upload->display_errors();
                }
            }
            
            $data = array (
                'nama_rumah'                => $nama_rumah,
                'kode_type'                 => $kode_type,
                'luas_bangunan'             => $luas_bangunan,
                'status'                    => $status,
                'lokasi'                    => $lokasi,
                'kamar_tidur'               => $kamar_tidur,
                'kamar_mandi'               => $kamar_mandi,
                'ruangan'                   => $ruangan,
                'lantai'                    => $lantai,
                'garasi'                    => $garasi,
                'deskripsi'                 => $deskripsi,
                'alamat'                    => $alamat,
                'kota'                      => $kota,
                'kode_pos'                  => $kode_pos,
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
            $this->form_validation->set_rules('status','Status','required');
            $this->form_validation->set_rules('lokasi','Lokasi','required');
            $this->form_validation->set_rules('kamar_tidur','Kamar Tidur','required');
            $this->form_validation->set_rules('kamar_mandi','Kamar Mandi','required');
            $this->form_validation->set_rules('ruangan','Ruangan','required');
            $this->form_validation->set_rules('lantai','Lantai','required');
            $this->form_validation->set_rules('garasi','Garasi','required');
            $this->form_validation->set_rules('deskripsi','Deskripsi','required');
            $this->form_validation->set_rules('alamat','Alamat','required');
            $this->form_validation->set_rules('kota','Kota','required');
            $this->form_validation->set_rules('kode_pos','Kode Pos','required');
            $this->form_validation->set_rules('harga','Harga','required');
        }

        public function delete_rumah($id)
        {
            $where = array ('id_rumah' => $id);
            $this->rental_model->delete_data($where, 'rumah');
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible
                    fade show" role="alert"> Data Berhasil Dihapus ! .
                    <button type="button" class="close" data-dismiss="alert"
                        aria-label="Close"
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
                redirect('admin/data_rumah');
        }

        public function search(){
            $keyword = $this->input->post('keyword');
            $data['user']  = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); 
            $data['data_rumah'] = $this->rental_model->get_keyword($keyword); 
                $this->load->view('templates_admin/header');
                $this->load->view('templates_admin/sidebar',$data);
                $this->load->view('admin/data_rumah_filter',$data);
        
        }
    
}

?>

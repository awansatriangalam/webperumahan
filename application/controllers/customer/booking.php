<?php

class Booking Extends CI_Controller
{  
    public function __construct(){
            parent::__construct();

            if($this->session->userdata('role_id') !='2'){
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Anda Belum Login!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>');
                        redirect('authn');
            }
        }

    public function add($id)
    {
        $data['detail'] = $this->rental_model->ambil_id_rumah($id);
        $data['tipe'] = $this->rental_model->ambil_id_type($id);
        $this->load->view('templates_customer/header');
        $this->load->view('customer/booking', $data);
        $this->load->view('templates_customer/footer');
    }

    public function add_aksi()
    {
        $id_user            = $this->session->userdata('id_user');
        $id_rumah           = $this->input->post('id_rumah');
        $tanggal            = $this->input->post('tanggal_transaksi');
        $harga              = $this->input->post('harga');
        $status_pesan       = $this->input->post('status_pesan');
        $status_transaksi   = $this->input->post('status_transaksi');
        
        $data           = array(
            'id_user'           => $id_user,
            'id_rumah'          => $id_rumah,
            'tanggal_transaksi' => date('Y-m-d'),
            'harga'             => $harga,
            'status_pesan'      => 'Belum Selesai',
            'status_transaksi'  => '1'
        );

        $this->rental_model->insert_data($data,'transaksi');

        $status  = array(
            'status' => '2'
        );
        $id      = array(
            'id_rumah'  =>$id_rumah
        );

        $this->rental_model->update_data('rumah',$status,$id);


        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible
                    fade show" role="alert"> Berhasil Booking !.
                <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close"
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('welcome/detail_rumah/'.$id_rumah); 
    }
}

?>
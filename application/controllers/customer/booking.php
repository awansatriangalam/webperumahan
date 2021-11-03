<?php

class Booking Extends CI_Controller
{
    
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
        $id_rumah       = $this->input->post('id_rumah');
        $harga          = $this->input->post('harga');
        $status_pesan   = $this->input->post('status_pesan');

        
        $data           = array(
            'id_rumah'      => $id_rumah,
            'harga'         => $harga,
            'status_pesan'  => 'Pending'
        );

        $this->rental_model->insert_data($data,'transaksi');

        $status  = array(
            'status' => '0'
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
                redirect('customer/dashboard/detail_rumah/').$dt->id_rumah; 
    }
}

?>
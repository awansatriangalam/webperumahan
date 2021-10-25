<?php

class Pesan extends CI_Controller
{
    public function tambah_pesan($id)
    {
        $data['detail'] = $this->rental_model->ambil_id_rumah($id);
        $data['rumah'] = $this->rental_model->get_data('rumah')->result();
        $this->load->view('templates_customer/header');
        $this->load->view('customer/tambah_pesan', $data);
        $this->load->view('templates_customer/footer');
    }
}

?>
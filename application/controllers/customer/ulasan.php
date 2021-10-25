<?php 

class Ulasan extends CI_Controller{
    public function kirim_ulasan() 
    {
       $id  = $this->input->post('id_ulasan');
       $ulasan  = $this->input->post('ulasan');
       $this->rental_model->insert_data($data,'ulas');
       redirect('customer/dashboard/detail_rumah');
    }
}
?>
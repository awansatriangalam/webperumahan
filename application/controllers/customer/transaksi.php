<?php

class Transaksi extends CI_Controller{

    public function pembayaran($id)
    {
        $data['transaksi']= $this->db->query("SELECT * FROM transaksi tr, rumah rm, customer cs WHERE tr.id_rumah=rm.id_rumah AND tr.id_customer=cs.id_customer AND tr.id_pesan='$id' ORDER BY id_pesan DESC")->result();
        $this->load->view('templates_customer/header');
        $this->load->view('customer/pembayaran', $data);
        $this->load->view('templates_customer/footer');
    }

    public function pembayaran_aksi()
    {
        $id                                 = $this->input->post('id_pesan');
        $bukti_bayar                        = $_FILES['bukti_bayar']['name'];
            if($bukti_bayar)
                {
                $config ['upload_path']     = './assets/upload';
                $config ['allowed_types']   = 'pdf|jpg|jpeg|png|tiff';

                $this->load->library('upload', $config);

                if($this->upload->do_upload('bukti_bayar')){
                    $bukti_bayar = $this->upload->data('file_name');
                    $this->db->set('bukti_bayar', $bukti_bayar);
                }else{
                    echo $this->upload->display_errors();
                }
            }
        $data = array(
            "bukti_bayar"       => $bukti_bayar,
        );

        $where = array (
            'id_pesan'          => $id
        );

        $this->rental_model->update_data('transaksi', $data, $where);
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible
                    fade show" role="alert"> Bukti Berhasil Dikirim !.
                <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close"
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('customer/book'); 
    }

    public function cetak($id)
    {
        $data['transaksi']= $this->db->query("SELECT * FROM transaksi tr, rumah rm, customer cs WHERE tr.id_rumah=rm.id_rumah AND tr.id_customer=cs.id_customer AND tr.id_pesan='$id' ORDER BY id_pesan DESC")->result();
        $this->load->view('customer/cetak',$data);
        
    }
}
?>
<?php 

class Kontak extends CI_Controller{
    public function index() 
    {
        $data['rumah'] = $this->rental_model->get_data('rumah')->result();
        $customer = $this->session->userdata('id_customer');
        $data['customer']= $this->db->query("SELECT * FROM customer cs WHERE cs.id_customer='$customer'")->result();
        $this->load->view('templates_customer/header');
        $this->load->view('customer/kontak', $data);
        $this->load->view('templates_customer/footer');
    }

    public function pesan()
        {
            $this->_rules();

            if($this->form_validation->run() == FALSE) {
                $this->index();
            }else{              
                $id_pesan            = $this->input->post('id_pesan');
                $nama                = $this->input->post('nama');
                $email               = $this->input->post('email');
                $no_tlp              = $this->input->post('no_tlp');
                $pesan_              = $this->input->post('pesan_');

                $data = array(
                    'id_pesan'       => $id_pesan,
                    'nama'           => $nama,
                    'email'          => $email,
                    'no_tlp'         => $no_tlp,
                    'pesan_'         => $pesan_,
                );

                $this->rental_model->insert_data($data, 'pesan');
                $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible
                    fade show" role="alert"> Pesan Berhasil Dikirim !.
                <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close"
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('customer/kontak'); 
            }
        }

        public function _rules()
        {
            $this->form_validation->set_rules('nama','Nama','required');
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('pesan_','Pesan','required');
        }
}

?>
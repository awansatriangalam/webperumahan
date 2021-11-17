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
                $id_customer     = $this->session->userdata('id_customer');
                $pesan_              = $this->input->post('pesan_');

                $data = array(
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
            $this->form_validation->set_rules('pesan_','Pesan','required');
        }
}

?>
<?php 

class Dashboard extends CI_Controller{
    public function index() 
    {
        $data['rumah'] = $this->rental_model->get_data('rumah')->result();
        $this->load->view('templates_customer/header');
        $this->load->view('customer/dashboard', $data);
        $this->load->view('templates_customer/footer');
    }

    public function detail_rumah($id) 
    {
        $data['detail'] = $this->rental_model->ambil_id_rumah($id);
        $data['ulas']  = $this->rental_model->get_data('ulas')->result();       
        $data['rumah']  = $this->rental_model->get_data('rumah')->result();
        $this->load->view('templates_customer/header');
        $this->load->view('customer/detail_rumah', $data);
        $this->load->view('templates_customer/footer');
    }

    public function kirim_ulasan() 
    {
       $id_customer     = $this->session->userdata('id_customer');
       $id_rumah        = $this->input->post('id_rumah');
       $id              = $this->input->post('id_ulasan');
       $nama            = $this->input->post('nama');
       $nama_pengguna   = $this->input->post('nama_pengguna');
       $ulasan          = $this->input->post('ulasan');

       $data = array (
        'id_customer'       => $id_customer,
        'id_rumah'          => $id_rumah,
        'id_ulasan'         => $id,
        'nama'              => $nama,
        'nama_pengguna'     => $nama_pengguna,
        'ulasan'            => $ulasan,
    );
       $this->rental_model->insert_data($data,'ulas');
       redirect('customer/dashboard/detail_rumah/'.$id_rumah);
    }
    

    public function profil() 
    {
        $customer = $this->session->userdata('id_customer');
        $data['customer']= $this->db->query("SELECT * FROM customer cs WHERE cs.id_customer='$customer'")->result();
        $this->load->view('templates_customer/header');
        $this->load->view('customer/profil', $data);
        $this->load->view('templates_customer/footer');
    }

    

    public function _rules()
    {
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('username','Nama Pengguna','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('no_tlp','No Telepon','required');
        $this->form_validation->set_rules('no_ktp','No KTP','required');
        $this->form_validation->set_rules('pass','Katasandi','required');
    }

}

?>
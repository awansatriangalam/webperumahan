<?php 

class Pencarian extends CI_Controller
{

    public function index()
    {
        $lokasi = $this->input->post('lokasi');
        $kode_type = $this->input->post('kode_type');
        $kamar_tidur = $this->input->post('kamar_tidur');
        $kamar_mandi = $this->input->post('kamar_mandi');
        $this->_rules();
        
        $data['rumah'] = $this->rental_model->get_data('rumah')->result();  
        if ($this->form_validation->run()== FALSE) {
            $this->load->view('templates_customer/header');
            $this->load->view('customer/rumah',$data);
            $this->load->view('templates_customer/footer');
        }else{
            $data['filter'] = $this->db->query("SELECT * FROM rumah WHERE rumah.id_rumah AND option (lokasi) = '$lokasi' AND option (kode_type) = '$kode_type' AND option (kamar_tidur) = '$kamar_tidur' AND option (kamar_mandi) = '$kamar_mandi' ")->result();
            $this->load->view('templates_customer/header');
            $this->load->view('customer/filterrumah',$data);
            $this->load->view('templates_customer/footer');
        }  
    }

    public function _rules()
    {
        $this->form_validation->set_rules('lokasi','Tanggal');
        $this->form_validation->set_rules('kode_type','Tanggal');
        $this->form_validation->set_rules('status','Tanggal');
        $this->form_validation->set_rules('kamar_tidur','Tanggal');
        $this->form_validation->set_rules('kamar_mandi','Tanggal');
    }
}

?>
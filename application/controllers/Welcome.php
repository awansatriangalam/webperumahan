<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
        $data['ulas']  = $this->rental_model->ambil_id_ulasan($id);       
        $data['rumah']  = $this->rental_model->get_data('rumah')->result();
        $data['user']  = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); 
        $customer = $this->session->userdata('id_user');
        $data['customer']= $this->db->query("SELECT * FROM user cs WHERE cs.id_user='$customer'")->result();
        $this->load->view('templates_customer/header');
        $this->load->view('customer/detail_rumah', $data);
        $this->load->view('templates_customer/footer');
    }
}

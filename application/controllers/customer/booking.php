<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    Class Booking Extends CI_Controller{

        function __construct()
        {
        parent::__construct();
        $this->load->model('detail_model','rumah',true);      
        }

        function add($id)
        {
            $transaksi = $this->detail_model->get($id_rumah);

            $data  = array(
                'id'    => $transaksi->id_rumah,
                'nama'  => $transaksi->nama_rumah,
                'harga' => $transaksi->harga,
            );

            $this->booking->insert_data($data);
            redirect('booking');
        }

        function update()
        {
            $this->booking->update($_POST);
            redirect('booking');
        }

        function index()
        {
            $data['transaksi'] = $this->transaksi->contents();
            $this->load->view('templates_customer/header');
            $this->load->view('customer/booking', $data);
            $this->load->view('templates_customer/footer');
        }

    }
?>
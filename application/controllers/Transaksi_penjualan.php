<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Transaksi_penjualan extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            // $this->load->model('M_transaksi');
        }

        function index()
        {
            $data['judul'] = "Transaksi Penjualan";
            // $data['data'] = $this->M_master->loadUser();
            $this->load->view('Include/header', $data);
            $this->load->view('Include/sidebar');
            $this->load->view('Include/topbar');
            $this->load->view('V_transaksi_penjualan/index');
            $this->load->view('Include/footer');
        }
	}

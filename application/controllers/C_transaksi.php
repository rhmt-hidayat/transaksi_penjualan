<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_transaksi extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_transaksi');
	}

	function index()
	{
		$barang = 'Facial Care';
		$data['judul'] = "Transaksi Penjualan";
		$data['DataTransaksi'] = $this->M_transaksi->DataTransaksi();
		$this->load->view('Include/header', $data);
		$this->load->view('Include/sidebar');
		$this->load->view('Include/topbar');
		$this->load->view('V_transaksi/index', $data);
		$this->load->view('Include/footer');
	}

	public function cart()
	{
		$data['judul'] = "Cart Penjualan";
		$data['kode'] = $this->M_transaksi->TransaksiCode();
		$data['barang'] = $this->M_transaksi->loadBarang();
		$data['promo'] = $this->M_transaksi->loadPromo();
		$this->load->view('Include/header', $data);
		$this->load->view('Include/sidebar');
		$this->load->view('Include/topbar');
		$this->load->view('V_transaksi/cart', $data);
		$this->load->view('Include/footer');
	}

	function insert()
	{
		$kode_transaksi = $this->input->post('kode_transaksi');
		$nama_barang = $this->input->post('nama_barang');
		$harga = $this->input->post('harga');
		$kode_promo       = htmlspecialchars(htmlentities(html_escape(ucwords($this->input->post('kode_promo')))));
		$keterangan      = htmlspecialchars(htmlentities(html_escape(ucwords($this->input->post('keterangan')))));
		$jumlah = $this->input->post('jumlah');
		$total = $this->input->post('total');
		$bayar = $this->input->post('bayar');
		$kembalian = $this->input->post('kembalian');
		// var_dump($keterangan);

		$data = array(
			'kode_transaksi'      => $kode_transaksi,
			'nama_barang'      => $nama_barang,
			'harga'      => $harga,
			'kode_promo'      => $kode_promo,
			'keterangan'      => $keterangan,
			'jumlah'      => $jumlah,
			'total'      => $total,
			'bayar'     => $bayar,
			'kembalian'       => $kembalian,
		);
		// var_dump($data);

		$insert = $this->M_transaksi->insert('transaksi', $data);
		if ($insert) {
			$this->session->set_flashdata('sukses', 'Transaksi Successfully');
			redirect('c_transaksi', 'refresh');
		} else {
			$this->session->set_flashdata('error', 'Transaksi Failed');
			redirect('c_transaksi', 'refresh');
		}
	}

	public function cetak_invoice($id)
	{
		$result = $this->M_transaksi->cekDatabyID('transaksi', $id);
		if (count($result) > 0) {
			foreach ($result as $baris) {
				$kode_transaksi       = $baris->kode_transaksi;
				$nama_barang      = $baris->nama_barang;
				$harga   = $baris->harga;
				$kode_promo   = $baris->kode_promo;
				$keterangan   = $baris->keterangan;
				$jumlah   = $baris->jumlah;
				$total   = $baris->total;
				$bayar   = $baris->bayar;
				$kembalian   = $baris->kembalian;
			}

			$data['tgl'] = date('l, d-m-Y');
			$data['edit'] = array(
				'id'            	=> $id,
				'kode_transaksi'    => $kode_transaksi,
				'nama_barang'     	=> $nama_barang,
				'harga'       		=> $harga,
				'kode_promo'       	=> $kode_promo,
				'keterangan'       	=> $keterangan,
				'jumlah'       		=> $jumlah,
				'total'       		=> $total,
				'bayar'       		=> $bayar,
				'kembalian'       	=> $kembalian,
			);
			$this->load->view('V_invoice/index', $data);
		} else {
			$this->session->set_flashdata('error', 'Data not found');
			redirect('C_transaksi', 'refresh');
		}
	}

	public function print_pdf($id)
	{
		$data['promo'] = $this->M_transaksi->cekPromobyID('promo', $id);
		$data['barang'] = $this->M_transaksi->loadBarang();

		$this->load->library('pdf');
		$tgl = date('Y-m-d');

		$this->pdf->setPaper('Letter', 'lanskap');
		$this->pdf->filename = "Invoice - $tgl.pdf";
		$this->pdf->load_view('V_invoice/index', $data);
	}
}

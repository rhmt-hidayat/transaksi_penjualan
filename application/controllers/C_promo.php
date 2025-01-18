<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class C_promo extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('M_transaksi');
        }

        function index()
        {
            $data['judul'] = "Promo Penjualan";
            $data['data'] = $this->M_transaksi->PromoCode();
            $data['barang'] = $this->M_transaksi->loadBarang();
            $data['promo'] = $this->M_transaksi->loadPromo();
            $this->load->view('Include/header', $data);
            $this->load->view('Include/sidebar');
            $this->load->view('Include/topbar');
            $this->load->view('V_promo/index', $data);
            $this->load->view('Include/footer');
        }

		function getBarang()
        {
            $id = $this->input->post('nama_promo');
            $result = $this->M_transaksi->cekID('master_barang', $id);
            if(count($result) > 0)
            {
                foreach($result as $row)
                {
                    $kode_barang = $row->kode_barang;
                    $nama_barang = $row->nama_barang;
                    $harga = $row->harga;
                }

                $data = array(
                    'kode_barang' => $kode_barang,
                    'nama_barang' => $nama_barang,
                    'harga' => $harga,
                );

                echo json_encode($data);
            }
            else
            {
                $data = array(
                    'kode_barang' => '',
                    'nama_barang' => '',
                    'harga' => '',
                );

                echo json_encode($data);
            }
        }

		function insert()
        {
            $kode_promo       = htmlspecialchars(htmlentities(html_escape(ucwords($this->input->post('kode_promo')))));
            $nama_promo      = htmlspecialchars(htmlentities(html_escape(ucwords($this->input->post('nama_promo')))));
            $keterangan = $this->input->post('keterangan');
			// var_dump($keterangan);

            $result = $this->M_transaksi->cekPromo($kode_promo);
            if(count($result) > 0)
            {
                $this->session->set_flashdata('error', 'Kode promo already exist!');
                redirect('C_promo', 'refresh');
            }
            else
            {
                $data = array(
                    'kode_promo'      => $kode_promo,
                    'nama_promo'     => $nama_promo,
                    'keterangan'       => $keterangan,
                );
				// var_dump($data);

                $insert = $this->M_transaksi->insert('promo', $data);
                if($insert)
                {
                    $this->session->set_flashdata('sukses', 'Successfully added new Promo');
                    redirect('c_promo', 'refresh');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Failed to add new Promo');
                    redirect('c_promo', 'refresh');
                }
            }
        }

		function edit($id)
        {
            $result = $this->M_transaksi->cekPromobyID('promo', $id);
            if(count($result) > 0)
            {
                foreach($result as $baris)
                {
                    $kode_promo       = $baris->kode_promo;
                    $nama_promo      = $baris->nama_promo;
                    $keterangan   = $baris->keterangan;
                }

                $data['edit'] = array(
                    'id'            => $id,
                    'kode_promo'      => $kode_promo,
                    'nama_promo'     => $nama_promo,
                    'keterangan'       => $keterangan,
                );
				// var_dump($data);
                $data['judul'] = "Edit promo";
				$data['barang'] = $this->M_transaksi->loadBarang();
                $this->load->view('Include/header', $data);
                $this->load->view('Include/sidebar');
				$this->load->view('Include/topbar');
                $this->load->view('V_promo/edit', $data);
                $this->load->view('Include/footer');
            }
            else
            {
                $this->session->set_flashdata('error', 'promo not found');
                redirect('c_promo', 'refresh');
            }
        }

		function update()
        {
            $id = $this->input->post('id');
            $kode_promo       = htmlspecialchars(htmlentities(html_escape(ucwords($this->input->post('kode_promo')))));
            $nama_promo      = htmlspecialchars(htmlentities(html_escape(ucwords($this->input->post('nama_promo')))));
            $keterangan = $this->input->post('keterangan');

            $data = array(
                'kode_promo'          => $kode_promo,
                'nama_promo'          => $nama_promo,
                'keterangan'          => $keterangan,
            );
			// var_dump($data);
            
            $where = array('id' => $id);
            $update = $this->M_transaksi->update('promo', $data, $where);
            if($update)
            {
                $this->session->set_flashdata('sukses', 'Berhasil Merubah Data');
                redirect('c_promo', 'refresh');
            }
            else
            {
                $this->session->set_flashdata('error', 'Gagal Merubah Data');
                redirect('c_promo', 'refresh');
            }
        }

		function delete()
        {
            $id = $this->input->post('id');
            $where = array('id' => $id);

            $update = $this->M_transaksi->delete('promo', $where);
            if($update)
            {
                $this->session->set_flashdata('sukses', 'Berhasil Menghapus Data');
                redirect('c_promo', 'refresh');
            }
            else
            {
                $this->session->set_flashdata('error', 'Gagal Menghapus Data');
                redirect('c_promo', 'refresh');
            }
        }
	}

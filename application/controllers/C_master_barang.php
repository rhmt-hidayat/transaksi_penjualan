<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class C_master_barang extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('M_transaksi');
        }

        function index()
        {
            $data['judul'] = "Master Barang";
            $data['data'] = $this->M_transaksi->loadBarang();
            $this->load->view('Include/header', $data);
            $this->load->view('Include/sidebar');
            $this->load->view('Include/topbar');
            $this->load->view('V_master_barang/index', $data);
            $this->load->view('Include/footer');
        }

		function insert()
        {
            $kode_barang       = htmlspecialchars(htmlentities(html_escape(ucwords($this->input->post('kode_barang')))));
            $nama_barang      = htmlspecialchars(htmlentities(html_escape(ucwords($this->input->post('nama_barang')))));
            $harga = $this->input->post('harga');
			// var_dump($harga);

            $result = $this->M_transaksi->cekDataBarang($kode_barang);
            if(count($result) > 0)
            {
                $this->session->set_flashdata('error', 'Kode barang already exist!');
                redirect('C_master_barang', 'refresh');
            }
            else
            {
                $data = array(
                    'kode_barang'      => $kode_barang,
                    'nama_barang'     => $nama_barang,
                    'harga'       => $harga,
                );
				// var_dump($data);

                $insert = $this->M_transaksi->insert('master_barang', $data);
                if($insert)
                {
                    $this->session->set_flashdata('sukses', 'Successfully added new Barang');
                    redirect('C_master_barang', 'refresh');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Failed to add new Barang');
                    redirect('C_master_barang', 'refresh');
                }
            }
        }

		function edit($id)
        {
            $result = $this->M_transaksi->cekDatabyID('master_barang', $id);
            if(count($result) > 0)
            {
                foreach($result as $baris)
                {
                    $kode_barang       = $baris->kode_barang;
                    $nama_barang      = $baris->nama_barang;
                    $harga   = $baris->harga;
                }

                $data['edit'] = array(
                    'id'            => $id,
                    'kode_barang'      => $kode_barang,
                    'nama_barang'     => $nama_barang,
                    'harga'       => $harga,
                );
                $data['judul'] = "Edit Barang";
                $this->load->view('Include/header', $data);
                $this->load->view('Include/sidebar');
				$this->load->view('Include/topbar');
                $this->load->view('V_master_barang/edit', $data);
                $this->load->view('Include/footer');
            }
            else
            {
                $this->session->set_flashdata('error', 'Barang not found');
                redirect('Transksi_penjualan', 'refresh');
            }
        }

		function update()
        {
            $id = $this->input->post('id');
            $kode_barang = htmlspecialchars(htmlentities(html_escape(strtoupper($this->input->post('kode_barang')))));
            $nama_barang = htmlspecialchars(htmlentities(html_escape(ucwords($this->input->post('nama_barang')))));
            $harga = $this->input->post('harga');

            $data = array(
                'kode_barang'          => $kode_barang,
                'nama_barang'          => $nama_barang,
                'harga'                 => $harga,
            );
			// var_dump($data);
            
            $where = array('id' => $id);
            $update = $this->M_transaksi->update('master_barang', $data, $where);
            if($update)
            {
                $this->session->set_flashdata('sukses', 'Berhasil Merubah Data');
                redirect('c_master_barang', 'refresh');
            }
            else
            {
                $this->session->set_flashdata('error', 'Gagal Merubah Data');
                redirect('c_master_barang', 'refresh');
            }
        }

		function delete()
        {
            $id = $this->input->post('id');
            $where = array('id' => $id);

            $update = $this->M_transaksi->delete('master_barang', $where);
            if($update)
            {
                $this->session->set_flashdata('sukses', 'Berhasil Menghapus Data');
                redirect('c_master_barang', 'refresh');
            }
            else
            {
                $this->session->set_flashdata('error', 'Gagal Menghapus Data');
                redirect('c_master_barang', 'refresh');
            }
        }
	}

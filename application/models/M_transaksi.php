<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class M_transaksi extends CI_Model
    {
		function cekDataBarang($kode)
        {
            $this->db->where('kode_barang', $kode);
            return $this->db->get('master_barang')->result();
        }

		function cekPromo($kode)
        {
            $this->db->where('kode_promo', $kode);
            return $this->db->get('promo')->result();
        }

		function cekDatabyID($table, $id)
        {
            $this->db->where('id', $id);

            return $this->db->get($table)->result();
        }

		function cekPromobyID($table, $id)
        {
            $this->db->where('id', $id);

            return $this->db->get($table)->result();
        }

		Function DataTransaksi()
        {
            // $this->db->select('master_barang.*, promo.kode_promo as kodePromo, promo.keterangan as keterangan');
            // $this->db->from('master_barang');
            // $this->db->join('promo', 'master_barang.nama_barang = promo.nama_promo', 'LEFT');
            // $this->db->order_by('master_barang.kode_barang', 'ASC');
			$this->db->select('*');
            $this->db->from('transaksi');
            $this->db->order_by('kode_transaksi', 'ASC');
            
            return $this->db->get()->result();
        }

		function loadBarang()
        {
            $this->db->select('*');
            $this->db->from('master_barang');
            $this->db->order_by('kode_barang', 'ASC');
            
            return $this->db->get()->result();
        }

		function loadPromo()
        {
            $this->db->select('*');
            $this->db->from('promo');
            $this->db->order_by('kode_promo', 'ASC');
            
            return $this->db->get()->result();
        }

		public function PromoCode(){
			$this->db->select('RIGHT(promo.kode_promo,3) as kode_promo', FALSE);
			$this->db->order_by('kode_promo','DESC');    
			$this->db->limit(1);    
			$query = $this->db->get('promo');
				if($query->num_rows() <> 0){      
					 $data = $query->row();
					 $kode = intval($data->kode_promo) + 1; 
				}
				else{      
					 $kode = 1;  
				}
			$batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
			$kodetampil = "PROMO-".$batas;
			return $kodetampil;  
		}

		public function TransaksiCode(){
			$this->db->select('RIGHT(transaksi.kode_transaksi,3) as kode_transaksi', FALSE);
			$this->db->order_by('kode_transaksi','DESC');    
			$this->db->limit(1);    
			$query = $this->db->get('transaksi');
				if($query->num_rows() <> 0){      
					 $data = $query->row();
					 $kode = intval($data->kode_transaksi) + 1; 
				}
				else{      
					 $kode = 1;  
				}
			$batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
			$kodetampil = "TR-".$batas;
			return $kodetampil;  
		}

		function cekID($table, $id)
        {
            $this->db->where('id', $id);

            return $this->db->get($table)->result();
        }

		function insert($table, $data)
        {
            return $this->db->insert($table, $data); 
        }

        function update($table, $data, $where)
        {
            return $this->db->update($table, $data, $where);
        }

        function delete($table, $where)
        {
            return $this->db->delete($table, $where);
        }
	}

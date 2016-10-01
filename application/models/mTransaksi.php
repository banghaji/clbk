<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtransaksi extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	
	function bacaTransaksi() {
        $query = $this->db->get('view_transaksi');
        //$query = $this->db->get_where('view_transaksi','id_jenis="1"');
        return $query->result();
        //return $query;
	}
	
	function hapusTransaksi($id_bayar) {
		//perintah hapus
		$this->db->where('id_bayar', $id_bayar);
		$this->db->delete('transaksi_bayar');
	}
	
	function tambahTransaksi($data) {
		$query = $this->db->insert('transaksi_bayar', $data);
	}

	function detailTransaksi($id_bayar) {
		$query=$this->db->where('id_bayar', $id_bayar);
		$query=$this->db->get('transaksi_bayar');
		return $query->result();
	}
	
	function perbaruiTransaksi($id_bayar, $data) {
		$this->db->where('id_bayar', $id_bayar);
		$this->db->update('transaksi_bayar', $data);
	}
}

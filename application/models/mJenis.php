<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mjenis extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	
	function bacaJenis() {
        $query = $this->db->get('jenis_bayar');
        return $query->result();
	}
	
	function hapusJenis($id_jenis) {
		//perintah hapus
		$this->db->where('id_jenis', $id_jenis);
		$this->db->delete('jenis_bayar');
	}

	function tambahJenis($data) {
		$query = $this->db->insert('jenis_bayar', $data);
	}

	function detailJenis($id_jenis) {
		$query=$this->db->where('id_jenis', $id_jenis);
		$query=$this->db->get('jenis_bayar');
		return $query->result();
	}
	
	function perbaruiJenis($id_jenis, $data) {
		$this->db->where('id_jenis', $id_jenis);
		$this->db->update('jenis_bayar', $data);
	}
	
}

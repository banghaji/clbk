<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtempat extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	
	function bacaTempat() {
        $query = $this->db->get('tempat_bayar');
        return $query->result();
	}
	
	function hapusTempat($id_tempat) {
		//perintah hapus
		$this->db->where('id_tempat', $id_tempat);
		$this->db->delete('tempat_bayar');
	}

	function tambahTempat($data) {
		$query = $this->db->insert('tempat_bayar', $data);
	}

	function detailTempat($id_tempat) {
		$query=$this->db->where('id_tempat', $id_tempat);
		$query=$this->db->get('tempat_bayar');
		return $query->result();
	}
	
	function perbaruiTempat($id_tempat, $data) {
		$this->db->where('id_tempat', $id_tempat);
		$this->db->update('tempat_bayar', $data);
	}
	
}

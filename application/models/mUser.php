<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Muser extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	
	function cekLogin($uID, $uPW) {
		//$u = mysql_real_escape_string($uID);
		//$p = md5(mysql_real_escape_string($uPW));
        $query = $this->db->query("SELECT * FROM user_bayar WHERE nim='$uID'");
		if($query->num_rows()>0) {
            foreach($query->result() as $hasil) {
				if ($hasil->sandi == md5($uPW)) {
					$data['uID'] = $hasil->nim;
					$data['nama'] = $hasil->nama;
					$data['sandi'] = $hasil->sandi;
					return $data;
				}
				else {
					return FALSE;
				}
			} //end for
        }
		else {
            return FALSE;
        }
	}
	
/*	function hapusTransaksi($id_bayar) {
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
	}*/
	
}

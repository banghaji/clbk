<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('mUser','');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	
	public function index() {
		$this->load->view('vLogin');
	}
	
	function login() {
		$uID = $this->input->post('uID');
		$uPW = $this->input->post('uPW');

		$data_login = $this->mUser->cekLogin($uID, $uPW);
		if (empty($data_login)) {
			redirect('user');
		}
		else {
			//echo $data_login['uID'];
			//echo $data_login['nama'];
			$var_sesi['logged_in'] = 'www.banghaji.com'.$data_login['uID'].$data_login['nama'];
			$var_sesi['uID'] = $data_login['uID'];
			$var_sesi['nama'] = $data_login['nama'];
			//$var_sesi['sandi'] = $data_login['sandi'];
			$this->session->set_userdata($var_sesi);
			redirect('transaksi');
		}
	}
	
	function gantiSandi() {

	}
	
	function logout() {
		$this->session->sess_destroy();
		redirect('user');
	}
	
	
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenisbayar extends CI_Controller {
	function __construct() {
		parent::__construct();
		//$this->load->model('mTransaksi');
		//$this->load->model('mTransaksi','');
		$this->load->model('mJenis','');
		//$this->load->model('mTempat','');
		//$this->load->model('mTransaksi','banghaji');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	
	public function index() {
		$data['dJenis']=$this->mJenis->bacaJenis();
		//$data['dTransaksi']=$this->banghaji->bacaTransaksi();
		$this->load->view('vJenisBayar', $data);
	}
	
	function hapus() {
		// tangkap uri ke 3
		$id_jenis=$this->uri->segment(3);
		// kirim id_bayar ke model
		$this->mJenis->hapusJenis($id_jenis);
		redirect('jenisbayar', 'refresh');
	}

	function validasiForm() {
		$this->form_validation->set_rules('nama_jenis', 'Nama Jenis Pembayaran', 'required');
		return TRUE;
	}
	
	function tambah() {
		//$data=$this->bacaJenisTempat();
		if($this->input->post()) {
			$this->validasiForm();
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('iJenisBayar');
			}
			else {
				$data=array(
					'nama_jenis' => $this->input->post('nama_jenis')
				);
				$this->simpan($data);
			}
		}
		else {
			$this->load->view('iJenisBayar');
		}
	}
	
	function simpan($data) {
		$this->mJenis->tambahJenis($data);
		redirect('jenisbayar');
	}

	function bacaDetailJenis($id_jenis) {
		$data['detailJenis']=$this->mJenis->detailJenis($id_jenis);
		return $data;
	}
	
	function ubah() {
		$id_jenis=$this->uri->segment(3);
		$data=$this->bacaDetailJenis($id_jenis);
		if($this->input->post()) {
			$this->validasiForm();
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('eJenisBayar', $data);
			}
			else {
				$id_jenis=$this->input->post('id_jenis');
				$data=array(
					'nama_jenis' => $this->input->post('nama_jenis')
				);
				$this->perbarui($id_jenis, $data);
			}
		}
		else {
			$this->load->view('eJenisBayar', $data);
		}
	}
	
	function perbarui($id_jenis, $data) {
		$this->mJenis->perbaruiJenis($id_jenis, $data);
		redirect('jenisbayar');
	}
}

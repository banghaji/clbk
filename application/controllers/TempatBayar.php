<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tempatbayar extends CI_Controller {
	function __construct() {
		parent::__construct();
		//$this->load->model('mTransaksi');
		//$this->load->model('mTransaksi','');
		//$this->load->model('mTempat','');
		$this->load->model('mTempat','');
		//$this->load->model('mTransaksi','banghaji');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	
	public function index() {
		$data['dTempat']=$this->mTempat->bacaTempat();
		//$data['dTransaksi']=$this->banghaji->bacaTransaksi();
		$this->load->view('vTempatBayar', $data);
	}
	
	function hapus() {
		// tangkap uri ke 3
		$id_tempat=$this->uri->segment(3);
		// kirim id_tempat ke model
		$this->mTempat->hapusTempat($id_tempat);
		redirect('tempatbayar', 'refresh');
	}

	function validasiForm() {
		$this->form_validation->set_rules('nama_tempat', 'Nama Tempat Pembayaran', 'required');
		return TRUE;
	}
	
	function tambah() {
		//$data=$this->bacaJenisTempat();
		if($this->input->post()) {
			$this->validasiForm();
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('iTempatBayar');
			}
			else {
				$data=array(
					'nama_tempat' => $this->input->post('nama_tempat')
				);
				$this->simpan($data);
			}
		}
		else {
			$this->load->view('iTempatBayar');
		}
	}
	
	function simpan($data) {
		$this->mTempat->tambahTempat($data);
		redirect('tempatbayar');
	}

	function bacaDetailTempat($id_tempat) {
		$data['detailTempat']=$this->mTempat->detailTempat($id_tempat);
		return $data;
	}
	
	function ubah() {
		$id_tempat=$this->uri->segment(3);
		$data=$this->bacaDetailTempat($id_tempat);
		if($this->input->post()) {
			$this->validasiForm();
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('eTempatBayar', $data);
			}
			else {
				$id_tempat=$this->input->post('id_tempat');
				$data=array(
					'nama_tempat' => $this->input->post('nama_tempat')
				);
				$this->perbarui($id_tempat, $data);
			}
		}
		else {
			$this->load->view('eTempatBayar', $data);
		}
	}
	
	function perbarui($id_tempat, $data) {
		$this->mTempat->perbaruiTempat($id_tempat, $data);
		redirect('tempatbayar');
	}
}

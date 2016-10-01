<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
	function __construct() {
		parent::__construct();
		//$this->load->model('mTransaksi');
		$this->load->model('mTransaksi','');
		$this->load->model('mJenis','');
		$this->load->model('mTempat','');
		//$this->load->model('mTransaksi','banghaji');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	
	public function index() {
		$masuk = $this->session->userdata('logged_in');
		if (empty($masuk)) {
			$this->session->sess_destroy();
			redirect('user'); //masuk tanpa permisi dilempar ke sini :)
		}
		else {
			$data['dTransaksi']=$this->mTransaksi->bacaTransaksi();

			$data['user_menu'] = 'user_menu';
			$data['user_content'] = 'vTransaksi';
			$this->load->view('user_template', $data);
		}
	}
	
	function hapus() {
		// tangkap uri ke 3
		$id_bayar=$this->uri->segment(3);
		// kirim id_bayar ke model
		$this->mTransaksi->hapusTransaksi($id_bayar);
		redirect('transaksi', 'refresh');
	}

	function validasiForm() {
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('semester', 'Semester', 'required');
		$this->form_validation->set_rules('id_jenis', 'Jenis Pembayaran', 'required');
		$this->form_validation->set_rules('id_tempat', 'Tempat Pembayaran', 'required');
		$this->form_validation->set_rules('jumlah', 'Jumlah Bayar', 'required');
		return TRUE;
	}
	
	function bacaJenisTempat() {
		$data['jenis_bayar']=$this->mJenis->bacaJenis();
		$data['tempat_bayar']=$this->mTempat->bacaTempat();
		return $data;
	}

	function tambah() {
		$data=$this->bacaJenisTempat();
		if($this->input->post()) {
			$this->validasiForm();
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('iTransaksi', $data);
			}
			else {
				$data=array(
					'tanggal' => $this->input->post('tanggal'),
					'semester' => $this->input->post('semester'),
					'id_jenis' => $this->input->post('id_jenis'),
					'id_tempat' => $this->input->post('id_tempat'),
					'jumlah' => $this->input->post('jumlah'),
					'keterangan' => $this->input->post('keterangan')
				);
				$this->simpan($data);
			}
		}
		else {
			$this->load->view('iTransaksi', $data);
		}
	}
	
	function simpan($data) {
		$this->mTransaksi->tambahTransaksi($data);
		redirect('transaksi');
	}

	function bacaDetailTransaksi($id_bayar) {
		$data=$this->bacaJenisTempat();
		$data['detailTransaksi']=$this->mTransaksi->detailTransaksi($id_bayar);
		return $data;
	}
	
	function ubah() {
		$id_bayar=$this->uri->segment(3);
		$data=$this->bacaDetailTransaksi($id_bayar);
		if($this->input->post()) {
			$this->validasiForm();
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('eTransaksi', $data);
			}
			else {
				$id_bayar=$this->input->post('id_bayar');
				$data=array(
					'tanggal' => $this->input->post('tanggal'),
					'semester' => $this->input->post('semester'),
					'id_jenis' => $this->input->post('id_jenis'),
					'id_tempat' => $this->input->post('id_tempat'),
					'jumlah' => $this->input->post('jumlah'),
					'keterangan' => $this->input->post('keterangan')
				);
				$this->perbarui($id_bayar, $data);
			}
		}
		else {
			$this->load->view('eTransaksi', $data);
		}
	}
	
	function perbarui($id_bayar, $data) {
		$this->mTransaksi->perbaruiTransaksi($id_bayar, $data);
		redirect('transaksi');
	}
}

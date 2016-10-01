<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url', 'form'));
		//$this->load->model('mmhs','',TRUE);
	}
	
	public function index()
	{
		//$this->load->helper('url');
		$this->load->view('welcome_message');
	}

	function latihanSatu()
	{
		//$this->load->helper('url');
		$this->load->view('latihan_1');
	}
}

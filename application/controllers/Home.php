<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('pages/v_home');
	
	}

	public function pesan_berhasil()
	{
		$this->load->view('pages/pesan_berhasil');
	
	}

	public function about()
	{
		$this->load->view('pages/about');
	
	}


}

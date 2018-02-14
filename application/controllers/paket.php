<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class paket extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('paket_view');		
		$this->load->view('footer');
	}
}

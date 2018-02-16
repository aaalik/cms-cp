<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function index()
	{
		$data['menu'] = "dashboard";
		$data['title'] = "Dashboard | MJM Travel";

		$this->load->view('header', $data);
		$this->load->view('dashboard');		
		$this->load->view('footer');
	}
}

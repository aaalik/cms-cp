<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	function __construct() {
		parent::__construct();
		// do your validations
		while(!$this->session->userdata('loggedin'))
		{
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$data['menu'] = "dashboard";
		$data['title'] = "Dashboard | MJM Travel";

		$this->load->view('header', $data);
		$this->load->view('dashboard');		
		$this->load->view('footer');
	}

	public function changepassword()
	{
		$data['menu'] = "chgpassword";
		$data['title'] = "Change Password | MJM Travel";

		$this->load->view('header', $data);
		$this->load->view('dashboard');		
		$this->load->view('footer');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class slidebanner extends CI_Controller {

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
		$data['menu'] = "banner";
		$data['title'] = "Slide Banner | MJM Travel";

		$this->load->view('header', $data);
		$this->load->view('slidebanner_view');		
		$this->load->view('footer');
	}

	public function add()
	{
		$data['menu'] = "banner";
		$data['title'] = "Tambah Slide Banner | MJM Travel";

		$this->load->view('header', $data);
		$this->load->view('slidebanner_add_view');
		$this->load->view('footer');
	}
}

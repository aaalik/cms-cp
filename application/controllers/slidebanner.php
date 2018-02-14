<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class slidebanner extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('slidebanner_view');		
		$this->load->view('footer');
	}
}

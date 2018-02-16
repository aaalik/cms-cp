<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gallery extends CI_Controller {

	public function index()
	{
		$data['menu'] = "gallery";
		$data['title'] = "Gallery | MJM Travel";

		$this->load->view('header', $data);
		$this->load->view('gallery_view');		
		$this->load->view('footer');
	}

	public function add()
	{
		$data['menu'] = "gallery";
		$data['title'] = "Tambah Gallery | MJM Travel";
		
		$this->load->view('header', $data);
		$this->load->view('gallery_add_view');		
		$this->load->view('footer');
	}
}

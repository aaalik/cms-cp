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
		$this->load->view('changepass_view');		
		$this->load->view('footer');
	}

	public function changePass()
	{
		$id = $this->session->userdata('id');
		$this->db->select('password');
		$this->db->from('tb_user');
		$this->db->where('id',$id);	
		$row = $this->db->get()->row();
		if(password_verify($this->input->post('oldpass'),$row->password)){
			if($this->input->post('password')==$this->input->post('password2'))
			{
				$data = array(
					'password'=>password_hash($this->input->post('password'), PASSWORD_DEFAULT)
				);
				$this->db->where('id',$id);	
				$this->db->update('tb_user',$data);
				$this->session->set_flashdata('msg','<div class="alert alert-success"><strong>Password berhasil diganti.</strong></div>');
				redirect(base_url('user/changepassword'));
			}else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger"><strong>Password tidak sesuai.</strong></div>');
				redirect(base_url('user/changepassword'));			
			}
		}else{
			$this->session->set_flashdata('msg','<div class="alert alert-danger"><strong>Password lama salah.</strong></div>');
			redirect(base_url('user/changepassword'));	
		}
	}
}

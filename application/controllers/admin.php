<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('madmin');
		// do your validations
		while(!$this->session->userdata('loggedin'))
		{
			redirect(base_url('login'));
		}
	}

	public function index()
	{

		$this->db->select('level');
		$this->db->where('id',1);
		$query['row'] = $this->db->get('tb_user')->row();

		$data['menu'] = "dashboard";
		$data['title'] = "Dashboard | MJM Travel";

		$this->load->view('header', $data);
		$this->load->view('dashboard',$query);		
		$this->load->view('footer');
	}

	public function users()
	{
		$query['email'] = $this->input->get('email');
		$query['name'] = $this->input->get('name');
		$query['status'] = $this->input->get('status');

		if($query['email'] != "")
		{
			$this->db->like('email', $query['email']);
		}
		if($query['name'] != "")
		{
			$this->db->like('name', $query['name']);
		}
		if($query['status'] != "")
		{
			$this->db->like('status', $query['status']);
		}
		$query['row'] = $this->madmin->getUser();

		$data['menu'] = "usrmgmt";
		$data['title'] = "Manage Users | MJM Travel";

		$this->load->view('header', $data);
		$this->load->view('users_view', $query);		
		$this->load->view('footer');
	}

	public function addUser()
	{
		$data['menu'] = "usrmgmt";
		$data['title'] = "Add Users | MJM Travel";

		$this->load->view('header', $data);
		$this->load->view('users_add_view');		
		$this->load->view('footer');
	}

	public function detailUser()
	{
		$get_id = $this->input->get("id", true);
		$query['row'] = $this->madmin->detailUser($get_id);

		$data['menu'] = "usrmgmt";
		$data['title'] = "Detail User | MJM Travel";

		$this->load->view('header', $data);
		$this->load->view('users_detail_view', $query);
		$this->load->view('footer');
	}

	// POST function below
	public function addUserf()
	{
		if($this->input->post('password')==$this->input->post('password2'))
		{
			$data = array(
				'name'=>$this->input->post('name'),
				'email'=>$this->input->post('email'),
				'password'=>password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'level'=>'0',
				'status'=>$this->input->post('status')
			);
			$this->madmin->addUser($data);
			$this->session->set_flashdata('msg','<div class="alert alert-success"><strong>User berhasil ditambahkan.</strong></div>');
			redirect(base_url('admin/users'));
		}else{
			$this->session->set_flashdata('name',$this->input->post('name'));
			$this->session->set_flashdata('email',$this->input->post('email'));
			$this->session->set_flashdata('status',$this->input->post('status'));
			$this->session->set_flashdata('msg','<div class="alert alert-danger"><strong>Password tidak sesuai.</strong></div>');
			redirect(base_url('admin/addUser'));
			
		}
	}

	public function editUserf()
	{
		$get_id = $this->input->get("id", true);		
		$data = array(
			'name'=>$this->input->post('name'),
			'email'=>$this->input->post('email'),
			'status'=>$this->input->post('status')
		);
		$this->madmin->updateUser($get_id,$data);
		$this->session->set_flashdata('msg','<div class="alert alert-success"><strong>User berhasil diupdate.</strong></div>');
		redirect(base_url('admin/users'));
		
	}
	public function deleteUser()
	{
		$get_id = $this->input->get("id", true);
		$this->db->select('level');
		$this->db->where('id',$get_id);
		$row = $this->madmin->getUser()->row();
		echo $row;
		if($row->level=="1")
		{
			$this->session->set_flashdata('msg','<div class="alert alert-danger"><strong>Tidak dapat menghapus Super Admin.</strong></div>');
			redirect(base_url('admin/users'));
		}else{
			$this->madmin->deleteUser($get_id);
			$this->session->set_flashdata('msg','<div class="alert alert-success"><strong>User berhasil dihapus.</strong></div>');
			redirect(base_url('admin/users'));
		}
	}
}

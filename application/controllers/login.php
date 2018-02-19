<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

    function __construct() {
		parent::__construct();
		// do your validations
		while($this->session->userdata('loggedin'))
		{
			redirect(base_url());
		}
	}

	public function index()
	{
		$data['menu'] = "login";
        $data['title'] = "Login | MJM Travel";

		$this->load->view('login_view', $data);
    }

    public function validation()
    {
        $data['email'] = $this->input->post('email', TRUE);
        $data['password'] = $this->input->post('password', TRUE);
        $this->db->where("email", $data['email']);
        $this->db->where("status", '1');			
        $q = $this->db->get('tb_user');
                
        if($q->num_rows() > 0)
        {
            if (password_verify($data['password'], $q->row()->password))
            {
                echo 'Password is valid!';
                // Berhasil
                $data['msg'] = "Yeah, Login Berhasil !";
            
                // Session Login
                $this->session->set_userdata('loggedin', TRUE);
                $this->session->set_userdata('id', $q->row()->id);
                $this->session->set_userdata('status', $q->row()->status);
                $this->session->set_userdata('email', $q->row()->email);
                $this->session->set_userdata('name', $q->row()->name);
                $this->session->set_userdata('userlevel', $q->row()->level);
                        
                redirect(base_url());
            } else {
                $this->session->set_flashdata('msg','<strong>Login gagal.</strong>');
                redirect(base_url('login'));
            }
        } else {
            $this->session->set_flashdata('msg','<strong>Login gagal.</strong>');
            redirect(base_url('login'));
        }
    }
        
}
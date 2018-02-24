<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gallery extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('mgallery');				
		// do your validations
		while(!$this->session->userdata('loggedin'))
		{
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$data['menu'] = "gallery";
		$data['title'] = "Gallery | MJM Travel";

		$query['title'] = $this->input->get('title', TRUE);
		$query['order'] = $this->input->get('order', TRUE);
		$query['status'] = $this->input->get('status', TRUE);
		// untuk mencari judul
		if($query['title'] != "")
		{
			$this->db->like('title_gallery', $query['title']);
		}
		$query['row'] = $this->mgallery->getGallery();

		$this->load->view('header', $data);
		$this->load->view('gallery_view', $query);
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

	public function detail()
	{
		$get_id = $this->input->get("id", true);
		$query['row'] = $this->mgallery->detailGallery($get_id);
		$query['userview_url'] = "http://localhost/company-profile-kons/";

		$data['menu'] = "gallery";
		$data['title'] = "Tambah Gallery | MJM Travel";
		
		$this->load->view('header', $data);
		$this->load->view('gallery_detail_view', $query);		
		$this->load->view('footer');
	}

	// POST function below
	public function addGallery()
	{
		$config['upload_path'] = '../company-profile-kons/asset/gallery/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		
        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('gallery')){
			$this->session->set_flashdata('msg','<div class="alert alert-danger"><strong>File harus gambar.</strong></div>');
			$this->session->set_flashdata('title',$this->input->post('title'));									
			redirect(base_url('gallery/add'));
		}else{
			$data = array(
				'title_gallery'=>$this->input->post('title'),
				'upload_date'=>date("Y-m-d"),
				'img_gallery'=>$this->upload->data('file_name')
			);
			$this->mgallery->add($data);
			$this->session->set_flashdata('msg','<div class="alert alert-success"><strong>Gallery berhasil ditambahkan.</strong></div>');
			redirect(base_url('gallery'));
		}
	}

	public function editGallery()
	{
		$get_id = $this->input->get("id", true);
		$config['upload_path'] = '../company-profile-kons/asset/gallery/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		
		$this->load->library('upload', $config);
		if(isset($_FILES))
    	{
			// $_FILES['*name in html*']['name']
			if(empty($_FILES['gallery']['name']))
			{
				//logic here if dont update picture
				$data = array('title_gallery'=>$this->input->post('title'));
				$this->mgallery->updateGallery($get_id, $data);
				$this->session->set_flashdata('msg','<div class="alert alert-success"><strong>Gallery berhasil diupdate.</strong></div>');
				redirect(base_url('gallery'));
			}else{
				if(!$this->upload->do_upload('gallery'))
				{
					// logic if fail to update pic
					$this->session->set_flashdata('msg','<div class="alert alert-danger"><strong>File harus gambar.</strong></div>');
					$this->session->set_flashdata('title',$this->input->post('title'));
					redirect(base_url('gallery/detail?id=').$get_id);
				}else{
					$data = array(
						'title_gallery'=>$this->input->post('title'),
						'img_gallery'=>$this->upload->data('file_name')
					);
					$this->mgallery->updateGallery($get_id, $data);
					$this->session->set_flashdata('msg','<div class="alert alert-success"><strong>Gallery berhasil diupdate.</strong></div>');
					redirect(base_url('gallery'));
				}
			}
		}
	}

	public function delete()
	{
		$get_id = $this->input->get("id", true);
		$this->mgallery->deleteGallery($get_id);
		$this->session->set_flashdata('msg','<div class="alert alert-success"><strong>Gallery berhasil dihapus.</strong></div>');
		redirect(base_url('gallery'));
	}

}

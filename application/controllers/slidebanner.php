<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class slidebanner extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('mbanner');		
		// do your validations
		while(!$this->session->userdata('loggedin'))
		{
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$query['userview_url'] = "http://localhost/company-profile-kons/";		

		$query['title'] = $this->input->get('title', TRUE);
		$query['order'] = $this->input->get('order', TRUE);
		$query['status'] = $this->input->get('status', TRUE);
		// untuk mencari judul
		if($query['title'] != "")
		{
			$this->db->like('title_banner', $query['title']);
		}
		// untuk mencari urutan
		if($query['order'] != "")
		{
			$this->db->where('order_banner', $query['order']);
		}
		// untuk mencari status
		if($query['status'] != "")
		{
			$this->db->where('status_banner', $query['status']);
		}
		$query['row'] = $this->mbanner->get_banner();

		$data['menu'] = "banner";
		$data['title'] = "Slide Banner | MJM Travel";

		$this->load->view('header', $data);
		$this->load->view('slidebanner_view', $query);		
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

	public function detail()
	{
		$get_id = $this->input->get("id", true);
		$query['row'] = $this->mbanner->detailBanner($get_id);
		$query['userview_url'] = "http://localhost/company-profile-kons/";

		$data['menu'] = "banner";
		$data['title'] = "Detail Banner | MJM Travel";

		$this->load->view('header', $data);
		$this->load->view('slidebanner_detail_view', $query);		
		$this->load->view('footer');
	}

	// POST function
	public function addBanner()
	{
		
		$config['upload_path'] = '../company-profile-kons/asset/banner/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		
        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('banner')){
			$this->session->set_flashdata('msg','<div class="alert alert-danger"><strong>File harus gambar.</strong></div>');
			$this->session->set_flashdata('title',$this->input->post('title'));
			$this->session->set_flashdata('order',$this->input->post('order'));			
			$this->session->set_flashdata('status',$this->input->post('status'));									
			redirect(base_url('slidebanner/add'));
		}else{
			$data = array(
				'title_banner'=>$this->input->post('title'),
				'order_banner'=>$this->input->post('order'),
				'status_banner'=>$this->input->post('status'),
				'img_banner'=>$this->upload->data('file_name')
			);
			$this->mbanner->addBanner($data);
			$this->session->set_flashdata('msg','<div class="alert alert-success"><strong>Banner berhasil ditambahkan.</strong></div>');
			redirect(base_url('slidebanner'));
			// echo "<script>alert('Simpan Berhasil');location='".base_url()."paket'</script>";
		}
	
	}

	public function editBanner()
	{
		$get_id = $this->input->get("id", true);
		$config['upload_path'] = '../company-profile-kons/asset/banner/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		
		$this->load->library('upload', $config);
		if(isset($_FILES))
    	{
			// $_FILES['*name in html*']['name']
			if(empty($_FILES['banner']['name']))
			{
				//logic here if dont update picture
				$data = array(
					'title_banner'=>$this->input->post('title'),
					'order_banner'=>$this->input->post('order'),
					'status_banner'=>$this->input->post('status')
				);
				$this->mbanner->updateBanner($get_id, $data);
				$this->session->set_flashdata('msg','<div class="alert alert-success"><strong>Banner berhasil diupdate.</strong></div>');
				redirect(base_url('slidebanner'));
			}else{
				if(!$this->upload->do_upload('banner')){
					$this->session->set_flashdata('msg','<div class="alert alert-danger"><strong>File harus gambar.</strong></div>');
					$this->session->set_flashdata('title',$this->input->post('title'));
					$this->session->set_flashdata('order',$this->input->post('order'));			
					$this->session->set_flashdata('status',$this->input->post('status'));
					redirect(base_url('slidebanner/detail?id=').$get_id);
				}else{
					$data = array(
						'title_banner'=>$this->input->post('title'),
						'order_banner'=>$this->input->post('order'),
						'status_banner'=>$this->input->post('status'),
						'img_banner'=>$this->upload->data('file_name')
					);
					$this->mbanner->updateBanner($get_id, $data);
					$this->session->set_flashdata('msg','<div class="alert alert-success"><strong>Banner berhasil diupdate.</strong></div>');
					redirect(base_url('slidebanner'));
				}
			}
		}
	}

	public function delete()
	{
		$get_id = $this->input->get("id", true);
		$this->mbanner->deleteBanner($get_id);
		$this->session->set_flashdata('msg','<div class="alert alert-success"><strong>Banner berhasil dihapus.</strong></div>');
		redirect(base_url('slidebanner'));
	}

}

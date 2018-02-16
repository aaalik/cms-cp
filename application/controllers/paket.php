<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class paket extends CI_Controller {

	function __Construct(){
		parent::__construct();
		$this->load->model('mpaket');
	}

	public function index()
	{
		$data['menu'] = "paket";
		$data['title'] = "Paket | MJM Travel";

		$this->load->view('header', $data);
		$this->load->view('paket_view');		
		$this->load->view('footer');
	}

	public function add()
	{
		$data['menu'] = "paket";
		$data['title'] = "Tambah Paket | MJM Travel";

		$this->load->view('header', $data);
		$this->load->view('paket_add_view');		
		$this->load->view('footer');
	}

	public function addpaket()
	{
		$config['upload_path'] = './assets/uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		
        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('banner')){
			echo "<script>alert('File Harus Gambar');location='".base_url()."paket/add'</script>";
		}else{
			$data = array(
						'title'=>$this->input->post('title'),
						'harga'=>$this->input->post('harga'),
						'tgl_berangkat'=>$this->input->post('tgl_berangkat'),
						'deskripsi'=>$this->input->post('deskripsi'),
						'itinerary'=>$this->input->post('itinerary'),
						'fasilitas'=>$this->input->post('fasilitas'),
						'ketentuan'=>$this->input->post('ketentuan'),
						'status'=>$this->input->post('status'),
						'img'=>$this->upload->data('file_name')
					);
			$this->mpaket->add($data);
			echo "<script>alert('Simpan Berhasil');location='".base_url()."paket'</script>";
		}
	}

}

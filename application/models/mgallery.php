<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mgallery extends CI_Model {
	
	
	public function getGallery()
	{
		$this->db->select('*');
		$this->db->from('tb_gallery');
		$query = $this->db->get();
		return $query;
	}
	
	public function detailGallery($id)
	{
		$this->db->where('id_gallery',$id);
		$query = $this->db->get('tb_gallery');
		return $query->row();
	}

	// modify db below
	public function add($data)
	{
		$this->db->insert("tb_gallery",$data);
	}

	function updateGallery($id, $data)
	{
		$this->db->where('id_gallery',$id);
		$this->db->update("tb_gallery",$data);
	}
	
	public function deleteGallery($id)
	{
		$this->db->where('id_gallery',$id);
		$this->db->delete('tb_gallery');
	}
	
}

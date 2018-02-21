<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mbanner extends CI_Model {
    
  public function addBanner($data)
  {
    $this->db->insert("tb_banner",$data);
  }

	public function get_banner()
	{
		$this->db->select('*');
		$this->db->from("tb_banner");
		$query = $this->db->get();
		return $query;
  }

	function updateBanner($id, $data)
	{
		$this->db->where('id_banner',$id);
		$this->db->update("tb_banner",$data);
	}
    
  public function detailBanner($id)
  {
    $this->db->where('id_banner',$id);
		$query = $this->db->get('tb_banner');
		return $query->row();
  }

	public function deleteBanner($id)
	{
		$this->db->where('id_banner',$id);
		$this->db->delete('tb_banner');
	}

}

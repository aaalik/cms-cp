<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class madmin extends CI_Model {
    
    public function addUser($data)
    {
        $this->db->insert("tb_user",$data);
    }

	public function getUser()
	{
		$query = $this->db->get("tb_user");
        return $query;
    }

	function updateUser($id, $data)
	{
		$this->db->where('id',$id);
		$this->db->update("tb_user",$data);
    }
    
    public function detailUser($id)
    {
        $this->db->where('id',$id);
		$query = $this->db->get('tb_user');
        return $query->row();
    }

	public function deleteUser($id)
	{		
		$this->db->where('id',$id);
		$this->db->delete('tb_user');	
	}

}

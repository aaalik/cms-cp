<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mpaket extends CI_Model {

    public function add($data)
    {
        $query = $this->db->insert("tb_paket",$data);
		return $query;
    }

    public function get_paket(){
		$this->db->select('*');
		$this->db->from('tb_paket');
		$query = $this->db->get();
		return $query->result();
    }
    
    public function detail($id)
    {
        $this->db->where('id',$id);
		$query = $this->db->get('tb_paket');
		return $query->row();
    }

    public function deletepaket($id){
		$this->db->where('id',$id);
		$query = $this->db->delete('tb_paket');
		return $query;
	}

}

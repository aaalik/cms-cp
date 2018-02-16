<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mpaket extends CI_Model {

    public function add($data)
    {
        $query = $this->db->insert("tb_paket",$data);
		return $query;
    }

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjaman_m extends CI_Model {

	public function getAllPinjaman($id = null)
	{
        if($id == null){
		    return $this->db->get('master_pinjaman')->result_array();
        }else{
            return $this->db->get_where('master_pinjaman', ['id' => $id])->result_array();
        }
	}
}
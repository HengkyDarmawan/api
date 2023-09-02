<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gaji_m extends CI_Model {

	public function getAllGaji($id = null)
	{
        if($id == null){
		return $this->db->get('t_gaji_tendik')->result_array();
        }else{
            return $this->db->get_where('t_gaji_tendik', ['id' => $id])->result_array();
        }
	}
}

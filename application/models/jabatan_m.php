<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan_m extends CI_Model {

	public function getAllJabatan($id = null)
	{
        if($id == null){
		    return $this->db->get('master_jabatan')->result_array();
        }else{
            return $this->db->get_where('master_jabatan', ['id' => $id])->result_array();
        }
	}
}
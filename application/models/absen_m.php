<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen_m extends CI_Model {

	public function getAllAbsen($id = null)
	{
        if($id == null){
		return $this->db->get('absensi')->result_array();
        }else{
            return $this->db->get_where('absensi', ['id' => $id])->result_array();
        }
	}
}

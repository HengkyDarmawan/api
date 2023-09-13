<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role_m extends CI_Model {

	public function getAllRole($id = null)
	{
        if($id == null){
		    return $this->db->get('user_role')->result_array();
        }else{
            return $this->db->get_where('user_role', ['id' => $id])->result_array();
        }
	}
}
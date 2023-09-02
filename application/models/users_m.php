<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_m extends CI_Model {

	public function getAllUsers($id = null)
	{
        if($id == null){
		return $this->db->get('user')->result_array();
        }else{
            return $this->db->get_where('user', ['id' => $id])->result_array();
        }
	}
}

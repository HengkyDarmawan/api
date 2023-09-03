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
    public function getAll(){
        $this->db->select('u.*, r.role, mj.*');
        $this->db->from('user u');
        $this->db->join('user_role r', 'r.id = u.role_id');
        $this->db->join('master_jabatan mj', 'mj.id_jabatan = u.jabatan_id');
        return $this->db->get()->result_array();
    }
}

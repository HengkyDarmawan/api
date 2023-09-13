<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gaji_m extends CI_Model {

	public function getAllGaji($id = null)
	{
        if($id == null){
		return $this->db->get('t_gaji_tendik')->result_array();
        }else{
            return $this->db->get_where('t_gaji_tendik', ['id_golongan' => $id])->result_array();
        }
	}
    public function getDataGajiTendik(){
        $this->db->select('u.nik_karyawan , u.name , u.no_rek, u.nama_bank , mg.golongan, mj.jabatan, mg.*, CAST(mg.pph AS int) as pphInt');
        $this->db->from('user_jabatan as uj');
        $this->db->join('user as u', 'u.id = uj.user_id');
        $this->db->join('master_jabatan as mj', 'mj.id_jabatan = uj.jabatan_id');
        $this->db->join('t_gaji_tendik as mg', 'mg.id_golongan = uj.golongan_id');
        $this->db->order_by('mg.periode','desc');
        return $this->db->get()->result_array();
    }
}

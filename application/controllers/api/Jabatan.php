<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Jabatan extends RestController {


    public function index_get()
    {
        $id = $this->get('id');
        if($id == null){
            $jabatan = $this->jabatan_m->getAllJabatan();
        }else{
            $jabatan = $this->jabatan_m->getAllJabatan($id);
        }
        
        if($jabatan){
            $this->response([
                'status' => true,
                'data' => $jabatan
            ], RestController::HTTP_OK);
        } else{
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ], RestController::HTTP_NOT_FOUND);
        }
    }
}
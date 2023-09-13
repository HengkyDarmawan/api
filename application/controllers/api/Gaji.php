<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Gaji extends RestController {


    public function index_get()
    {
        $id = $this->get('id_golongan');
        if($id == null){
            $gaji = $this->gaji_m->getDataGajiTendik();
        }else{
            $gaji = $this->gaji_m->getAllGaji($id);
        }
        
        if($gaji){
            $this->response([
                'status' => true,
                'data' => $gaji
            ], RestController::HTTP_OK);
        } else{
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ], RestController::HTTP_NOT_FOUND);
        }
        // $this->response($users, RestController::HTTP_OK);
    }
}
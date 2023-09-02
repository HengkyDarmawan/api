<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Absen extends RestController {


    public function index_get()
    {
        $id = $this->get('id');
        if($id == null){
            $absen = $this->absen_m->getAllAbsen();
        }else{
            $absen = $this->absen_m->getAllAbsen($id);
        }
        
        if($absen){
            $this->response([
                'status' => true,
                'data' => $absen
            ], RestController::HTTP_OK);
        } else{
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ], RestController::HTTP_NOT_FOUND);
        }
    }
}
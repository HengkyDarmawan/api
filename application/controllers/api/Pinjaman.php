<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Pinjaman extends RestController {


    public function index_get()
    {
        $id = $this->get('id');
        if($id == null){
            $pinjaman = $this->pinjaman_m->getAllPinjaman();
        }else{
            $pinjaman = $this->pinjaman_m->getAllPinjaman($id);
        }
        
        if($pinjaman){
            $this->response([
                'status' => true,
                'data' => $pinjaman
            ], RestController::HTTP_OK);
        } else{
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ], RestController::HTTP_NOT_FOUND);
        }
    }
}
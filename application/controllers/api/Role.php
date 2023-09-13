<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Role extends RestController {


    public function index_get()
    {
        $id = $this->get('id');
        if($id == null){
            $role = $this->role_m->getAllRole();
        }else{
            $role = $this->role_m->getAllRole($id);
        }
        
        if($role){
            $this->response([
                'status' => true,
                'data' => $role
            ], RestController::HTTP_OK);
        } else{
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ], RestController::HTTP_NOT_FOUND);
        }
    }
}
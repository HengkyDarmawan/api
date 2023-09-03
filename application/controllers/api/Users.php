<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Users extends RestController {


    // public function index_get()
    // {
    //     $id = $this->get('id');
    //     if($id == null){
    //         $users = $this->users_m->getAllUsers();
    //     }else{
    //         $users = $this->users_m->getAllUsers($id);
    //     }
        
    //     if($users){
    //         $this->response([
    //             'status' => true,
    //             'data' => $users
    //         ], RestController::HTTP_OK);
    //     } else{
    //         $this->response([
    //             'status' => false,
    //             'message' => 'id not found'
    //         ], RestController::HTTP_NOT_FOUND);
    //     }
    //     // $this->response($users, RestController::HTTP_OK);
    // }
    public function index_get(){
        // $id = $this->get('id');
        $users = $this->users_m->getAll();
        
        $this->response([
            'status' => true,
            'data' => $users
        ], RestController::HTTP_OK);
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Rest_server extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
    }

    public function index_get()
    {
        $data = $this->db->get('user')->result_array();

        $this->response($data, RestController::HTTP_OK);
    }
}
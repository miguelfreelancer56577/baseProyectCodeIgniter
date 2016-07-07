<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Main_Controller {

    function __construct() {
        parent::__construct();  
    }

    public function index() {
        $this->view('componets');
    }

    public function test() {
        
       
    }

}

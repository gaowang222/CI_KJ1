<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pages2 extends CI_Controller {
    function  pages2(){
        parent::__construct();
        $this->load->helper('url');

    }
    public function index()
    {
        echo "2222";
    }
}
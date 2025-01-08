<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class BaseController extends CI_Controller {

    public function index () {
        $this->load->view('layout/user/header');
        $this->load->view('page/public/index');
        $this->load->view('layout/user/footer');
    }

}
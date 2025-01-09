<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    public function index() 
    {
        if (!$this->session->has_userdata('id')) {
            redirect('/auth/login');
        }

        $data['registrationsCount'] = $this->model->count('registrations');
        $data['invalidDataCount'] = count($this->model->where('registrations', 'validasi', '1')->get()->result());
        $data['validDataCount'] = $data['registrationsCount'] - $data['invalidDataCount'];
        $data['persentasi'] = $data['validDataCount'] * 100 / $data['registrationsCount'];

        $this->load->view('page/private/dashboard', $data);
    }
}
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    
    public function register(){
        if ($this->session->has_userdata('id')) {
            redirect(base_url('/'));
        }
        
        $this->load->view('layout/user/header');
        $this->load->view('page/auth/register');
        $this->load->view('layout/user/footer');
    }
    
    public function handleRegister(){
        // ensure that HTTP request method is POST
        if ($this->input->post('_method') !== 'POST') { 
            $this->session->set_flashdata('error', 'invalid request method'); 
            redirect(base_url('//auth/register'));
        }
        
        // validate data
        $this->form_validation->set_rules('name', 'Name', 'required|max_lenght[50]|is_unique[users.username]', ['is_unique' => 'This username already added.']);
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        
        if (!$this->form_validation->run()){
            redirect(base_url('//auth/register'));
        }
        
        // input variable
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        // hash password
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        
        // insert data to database
        $data = [
            'username' => $username,
            'password' => $password_hash, 
        ];
        
        $user = $this->model->insert('users', $data);
        
        // return
        $this->session->set_flashdata('success', 'Your data has been successfully added, please login');
        redirect(base_url('//auth/login'));
    }
    
    public function login(){
        if ($this->session->has_userdata('id')) {
            redirect(base_url('/'));
        }

        $this->load->view('layout/user/header');
        $this->load->view('page/auth/login');
        $this->load->view('layout/user/footer');
    }

    public function handleLogin(){
        // ensure that HTTP request method is POST
        if ($this->input->post('_method') !== "POST") {
            $this->session->set_flashdata('error', 'invalid request method'); 
            redirect(base_url('//auth/login'));
        }
        
        // validate data
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

        if (!$this->form_validation->run()) {
            $this->session->set_flashdata('error', 'error amba'); 
            redirect(base_url('//auth/login'));
        }

        // set variable
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // check is username exists
        $user = $this->model->where('users', 'username', $username)->get()->row_array();

        if (!$user) {
            $this->session->set_flashdata('error', 'invalid username or password');
            redirect(base_url('//auth/login'));
        }
        
        if (!password_verify($password, $user['password'])) {
            $this->session->set_flashdata('error', 'invalid email or password');
            redirect(base_url('//auth/login'));
        }

        // set session
        $this->session->set_userdata('id', $user['id_user']);
         
        // redirect
        redirect(base_url('/'));
    }
    
    public function handleLogout() {
        $this->session->sess_destroy();
        redirect(base_url('//auth/login'));
    }
    
}
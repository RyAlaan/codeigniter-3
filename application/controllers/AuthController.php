<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    
    public function register(){
        $this->load->view('layout/user/header');
        $this->load->view('page/auth/register');
        $this->load->view('layout/user/footer');
    }
    
    public function handleRegister(){
        // ensure that HTTP request method is POST
        if ($this->input->post('_method') !== 'POST') { 
            $this->session->set_flashdata('error', 'invalid request method'); 
            redirect(base_url('/index.php/auth/register'));
        }

        // validate data
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]', ['is_unique' => 'This email already exists.']);
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

        // hash password
        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

        // insert data to database
        $user = $this->model->insert('users', [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'password' => $password,
        ]);

        // return
        $this->session->set_flashdata('success', 'Your data has been successfully added, please login');
        redirect(base_url('/index.php/auth/login'));
    }
    
    public function login(){
        $this->load->view('layout/user/header');
        $this->load->view('page/auth/login');
        $this->load->view('layout/user/footer');
    }

    public function handleLogin(){
        // ensure that HTTP request method is POST
        if ($this->input->post('_method') !== "POST") {
            $this->session->set_flashdata('error', 'invalid request method'); 
            redirect(base_url('/index.php/auth/login'));
        }

        // validate data
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

        // check is email exists
        $user = $this->model->where('users', ['email' => $this->input->post('email')])
        if (!user) {
            $this->session->set_flashdata('error', 'invalid email or password');
            redirect(base_url('/index.php/auth/login'));
        }
        
        if ($user['password'] !=== hash_password($this->input->post('password'))) {
            $this->session->set_flashdata('error', 'invalid email or password');
            redirect(base_url('/index.php/auth/login'));
        }

        
    }

    public function handleLogout(){

    }
}
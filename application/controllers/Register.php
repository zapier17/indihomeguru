<?php

class Register extends CI_Controller
{
	function __construct()
    {
        parent::__construct();
        $this->load->model('auth');
    }
 
    public function index()
    {
        $this->load->view('register');
    }
 
    public function proses()
    {
        $this->form_validation->set_rules('username', 'username','trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('password', 'password','trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('email', 'email','trim|required|min_length[1]|max_length[255]');
        if ($this->form_validation->run()==true)
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $email = $this->input->post('email');
            $this->auth->register($username,$password,$email);
            $this->session->set_flashdata('success_register','Selamat Anda sudah bergabung bersama Kami!');
            redirect(base_url('index.php/login/index'));
        }
        else
        {
            $this->session->set_flashdata('error', validation_errors());
            redirect(base_url('index.php/register/index'));
        }
    }
}
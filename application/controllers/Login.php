<?php

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("user_model");
		$this->load->library('form_validation');

	}

    public function index()
    {
        if($this->input->post()){
            if($this->user_model->doLogin()) redirect('https://marvelapp.com/prototype/9401727/screen/73393183');
        }

        $this->load->view("authentication");
    }
}
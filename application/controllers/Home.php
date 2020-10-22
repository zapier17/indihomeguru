<?php

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("user_model");
		// if($this->user_model->isNotLogin()) redirect(base_url('index.php/login'));
	}

    public function index()
    {
        $this->load->view("home");
    }

}
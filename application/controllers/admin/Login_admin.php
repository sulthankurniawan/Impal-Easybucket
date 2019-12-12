<?php

class Login_admin extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view admin/overview.php
        $this->load->view("easybucket_test/nav2.html");
        $this->load->view("admin/login");
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

//	login page
	public function index()
	{
		//parent::__construct();
		$this->load->view('admin/login');
	}

	public function upload()
	{
		$this->load->view("upload.php");
	}
}




 
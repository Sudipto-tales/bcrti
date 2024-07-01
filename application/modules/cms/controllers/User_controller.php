<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_controller extends MX_Controller
{

	public function index()
	{
		$this->load->view('user_upload');

	}

}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Error_controller extends MX_Controller
{

	public function comming_soon()
	{
	
		$this->load->view('errors\comming_soon.php');

	}

}
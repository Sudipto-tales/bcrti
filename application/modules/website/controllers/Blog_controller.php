<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog_controller extends MX_Controller
{
  
	public function index()
	{
        $this->load->view('blogs');
    }
    public function anti_raging()
	{
        $this->load->view('blogs/anti_raging.php');
    }

}
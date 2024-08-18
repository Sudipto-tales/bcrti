<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page_controller extends MX_Controller
{
  
	public function about()
	{
        $this->load->view('about');
    }

    public function cources()
	{
        $this->load->view('cources');
    }

    public function gallery()
	{
        $this->load->view('gallery');
    }

    public function Placement()
	{
        $this->load->view('placement');
    }

}
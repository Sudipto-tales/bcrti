<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_controller extends MX_Controller
{
  
	public function index()
	{
		$this->load->model('Notice_model');
		$res['admission'] = $this->Notice_model->admission_data_get();
		$res['result'] = $this->Notice_model->result_data_get();
		$res['academic'] = $this->Notice_model->academic_data_get();
		$res['examination'] = $this->Notice_model->examination_data_get();
	    $this->load->view('home',$res);
  
	}
	
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Faculty_controller extends MX_Controller
{

	public function index()
	{
		$this->load->model('User_model');
		$res['bca'] = $this->User_model->bca_faculty_get();
		$res['bba'] = $this->User_model->bba_faculty_get();
		$res['bt'] = $this->User_model->bt_faculty_get();
		$this->load->view('faculty', $res);

	}

}
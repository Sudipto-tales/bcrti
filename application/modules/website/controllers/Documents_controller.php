<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Documents_controller extends MX_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
		$this->load->model('Search_model');

	}
	public function index()
	{
		$this->load->view('document');

	}

	public function admit()
	{
		

		if ($this->input->post()) {
			// Collect data from POST request
			$name = $this->input->post('name');
			$fname = $this->input->post('fathername');
			$dob = $this->input->post('dob');
			$stream = $this->input->post('stream');
			$semester = $this->input->post('sem');

			// Create an associative array for search criteria
			$criteria = array(
				'name' => $name,
				'fathername' => $fname,
				'dob' => $dob,
				'stream' => $stream,
				'sem' => $semester
			);

			$data = $this->Search_model->admit_get($criteria);

			if (!empty($data)) {
				foreach ($data as $value) {
				
				$admit_filepath = $value['admit_filepath'];
				
				redirect(base_url('assets/documents/admit/' . $admit_filepath));
				}
			} else {
				echo "No data found";
			}
		} else {
			echo "No POST data received.";
		}
	}
	public function result()
	{

		if ($this->input->post()) {
			// Collect data from POST request
			$name = $this->input->post('name');
			$roll = $this->input->post('roll');
			$dob = $this->input->post('dob');
			$stream = $this->input->post('stream');
			$semester = $this->input->post('sem');

			// Create an associative array for search criteria
			$criteria = array(
				'name' => $name,
				'roll' => $roll,
				'dob' => $dob,
				'stream' => $stream,
				'sem' => $semester
			);

			$data = $this->Search_model->result_get($criteria);

			if (!empty($data)) {
				foreach ($data as $value) {
				
				$result_filepath = $value['result_file'];
				
				redirect(base_url('assets/documents/result/' . $result_filepath));
				}
			} else {
				echo "No data found";
			}
		} else {
			echo "No POST data received.";
		}
	}

	public function marksheet()
	{

		if ($this->input->post()) {
			// Collect data from POST request
			$name = $this->input->post('name');
			$fname = $this->input->post('fathername');
			$roll = $this->input->post('roll');
			$dob = $this->input->post('dob');
			$stream = $this->input->post('stream');
			$semester = $this->input->post('sem');

			// Create an associative array for search criteria
			$criteria = array(
				'name' => $name,
				'fathername' => $fname,
				'roll' => $roll,
				'dob' => $dob,
				'stream' => $stream,
				'sem' => $semester
			);

			$data = $this->Search_model->marksheet_get($criteria);

			if (!empty($data)) {
				foreach ($data as $value) {
				
				$marksheet_filepath = $value['marksheet_file'];
				
				redirect(base_url('assets/documents/marksheet/' . $marksheet_filepath));
				}
			} else {
				echo "No data found";
			}
		} else {
			echo "No POST data received.";
		}
	}





}
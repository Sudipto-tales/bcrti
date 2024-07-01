<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Documents_controller extends MX_Controller
{

	public function index()
	{
		$this->load->view('document');

	}
	public function result()
	{
		if ($this->input->post()) {
			$roll = $this->input->post('roll');
			$stream = $this->input->post('stream');
			$semester = $this->input->post('semester');
			$data = $this->db->get_where('student_tbl', array('roll' => $roll, 'stream' => $stream, 'semester' => $semester, 'st_stats !=' => "purged"))->result_array();
			if (!empty($data)) {
				return $data;
			} else {
				echo "No data Found";
			}
		}
	}
	public function admit()
	{
		if ($this->input->post()) {
			$name = $this->input->post('name');
			$dob = $this->input->post('dob');
			$stream = $this->input->post('stream');
			$semester = $this->input->post('semester');
			$data = $this->db->get_where('student_tbl', array('name' => $name, 'dob' => $dob, 'stream' => $stream, 'semester' => $semester, 'st_stats !=' => "purged"))->result_array();
			if (!empty($data)) {
				return $data;
			} else {
				echo "No data Found";
			}
		}
	}

	public function marksheet()
	{
		if ($this->input->post()) {
			$roll = $this->input->post('roll');
			$stream = $this->input->post('stream');
			$semester = $this->input->post('semester');
			$data = $this->db->get_where('student_tbl', array('roll' => $roll, 'stream' => $stream, 'semester' => $semester, 'st_stats !=' => "purged"))->result_array();
			if (!empty($data)) {
				return $data;
			} else {
				echo "No data Found";
			}
		}
	}



}
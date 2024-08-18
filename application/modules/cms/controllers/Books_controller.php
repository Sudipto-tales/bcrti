<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Books_controller extends MX_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->model('Book_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
        $this->load->library('session');
    }
	public function index()
	{
		$this->load->view('book_upload');

	}
	public function do_upload() {
        // Set up file upload configuration
        $config['upload_path'] = './assets/books/';
        $config['allowed_types'] = 'pdf|doc|docx';
        $config['max_size'] = 5120*10; // 2MB max size
        $config['encrypt_name'] = TRUE;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('file')) {
            // File upload failed, load the form again with errors
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('book_upload', $error);
        } else {
            // File upload successful
            $upload_data = $this->upload->data();

            // Collect form data and file data into an array
            $data = [
                "title" => $this->input->post('name'),            
                "author" => $this->input->post('author'),
                "edition" => $this->input->post('edition'),
                "type" => $this->input->post('domain'),
                "file_name" => $upload_data['file_name'],
                "file_path" => 'assets/books/' . $upload_data['file_name']
            ];

            // Save data using the model
            if ($this->Notice_model->save_file($data)) {
                $this->session->set_flashdata('success');
                redirect('Books_controller/index');
            } else {
                $this->session->set_flashdata('error');
                redirect('Books_controller/index');
            }
        }
    }

}
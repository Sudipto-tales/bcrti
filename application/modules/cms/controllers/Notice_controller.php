<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notice_controller extends MX_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Notice_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
        $this->load->library('session');
    }

    public function index() {
        $this->load->view('notice_upload');
    }

    public function do_upload() {
        // Set up file upload configuration
        $config['upload_path'] = './assets/notice/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx';
        $config['max_size'] = 2048; // 2MB max size
        $config['encrypt_name'] = TRUE;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('file')) {
            // File upload failed, load the form again with errors
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('notice_upload', $error);
        } else {
            // File upload successful
            $upload_data = $this->upload->data();

            // Collect form data and file data into an array
            $data = [
                "title" => $this->input->post('title'),
                "domain" => $this->input->post('domain'),
                "u_name" => $this->input->post('uploaded_by'),
                "type" => $this->input->post('type'),
                "notice_from" => $this->input->post('notice_from'),
                "notice_to" => $this->input->post('notice_to'),
                "file_name" => $upload_data['file_name'],
                "file_path" => 'assets/notice/' . $upload_data['file_name']
            ];

            // Save data using the model
            if ($this->Notice_model->save_file($data)) {
                $this->session->set_flashdata('success');
                redirect('Notice_controller/index');
            } else {
                $this->session->set_flashdata('error');
                redirect('Notice_controller/index');
            }
        }
    }
}
?>

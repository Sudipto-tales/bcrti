<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Photo_controller extends MX_Controller
{

	public function index()
	{
		$this->load->view('photo_upload');

	}
	public function do_upload() {
        // Set up file upload configuration
        $config['upload_path'] = './assets/album/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
        $config['max_size'] = 5120; // 2MB max size
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
                "u_name" => $this->input->post('uploaded_by'),
                "type" => $this->input->post('type'),
                "file_name" => $upload_data['file_name'],
                "file_path" => 'assets/album/' . $upload_data['file_name']
            ];

            // Save data using the model
            if ($this->Notice_model->save_file($data)) {
                $this->session->set_flashdata('success');
                redirect('notice_controller/index');
            } else {
                $this->session->set_flashdata('error');
                redirect('notice_controller/index');
            }
        }
    }

}
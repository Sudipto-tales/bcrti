<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contactus_controller extends MX_Controller
{

    public function index()
    {
        $this->load->view('contact_us');
    }

    public function add_query() {
        // Load necessary libraries and helpers
        $this->load->model('Qurey_model');
        $this->load->helper('url');
        $this->load->library('form_validation');

        // Set form validation rules
        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');
        $this->form_validation->set_rules('phonenumber', 'Phone Number', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('massage', 'Message', 'required');

        // Check if form validation passed
        if ($this->form_validation->run() == FALSE) {
            // If validation fails, reload the form view with error messages
            $this->load->view('contact_us'); // Replace with your form view
        } else {
            // Collect form data
            $data = array(
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
                'phonenumber' => $this->input->post('phonenumber'),
                'email' => $this->input->post('email'),
                'subject' => $this->input->post('subject'),
                'message' => $this->input->post('massage')
            );

            if ($this->Query_model->insert_to_query_tbl($data)) {
                // Redirect to a success page or load a success view
                echo "data add sucessfully" ; // Replace with your actual success view file
            } else {
                // If there's an error during insertion, show an error message
                echo "data add failled" ; // Replace with your actual error view file
            }
        }
    }

}
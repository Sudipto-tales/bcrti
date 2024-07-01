<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contactus_controller extends MX_Controller
{

    public function index()
    {
        $this->load->view('contact_us');
    }

    public function add_query()
    {
        $form_data = $this->input->post();
        $data = [
            "firstname" => $form_data['firstname'],
            "lastname" => $form_data['lastname'],
            "ph_no" => $form_data['phonenumber'],
            "email_id" => $form_data['email'],
            "title" => $form_data['subject'],
            "query" => $form_data['massage']

        ];
        $this->Query_model->insert_to_query_tbl($data);
    }
}
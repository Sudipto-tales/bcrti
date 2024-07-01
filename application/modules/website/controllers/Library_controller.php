<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Library_controller extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Books_model');
    }
    public function index()
    {
        $this->load->view('digital_library');
    }

    public function bca()
    {
        $res['data'] = $this->Books_model->bca_books_get();
        $this->load->view('digital_library/bca', $res);
    }

    public function bba()
    {
        $res['data'] = $this->Books_model->bba_books_get();
        $this->load->view('digital_library/bba', $res);
    }

    public function biotech()
    {
        $res['data'] = $this->Books_model->biotech_books_get();
        $this->load->view('digital_library/bio_tech', $res);
    }

    public function others()
    {
        $res['data'] = $this->Books_model->others_books_get();
        $this->load->view('digital_library/others', $res);
    }
}
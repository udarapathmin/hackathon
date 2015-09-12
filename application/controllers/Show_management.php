<?php

class Show_management extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('show_model');
    }

    public function index() {
        $data['page_title'] = "Show Management";
        $data['shows'] = $this->show_model->get_shows();
        $this->load->view('template/header', $data);
        $this->load->view('shows/shows_main', $data);
        $this->load->view('template/footer', $data);
    }

}

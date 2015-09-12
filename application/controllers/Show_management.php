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

    public function create() {
        $data['page_title'] = "Show Management";
        $data['shows'] = $this->show_model->get_shows();
        $this->load->library('form_validation');

        $this->form_validation->set_rules('show_name', 'Show Name', 'required');
        $this->form_validation->set_rules('show_desc', 'Show Description', 'required');
        $this->form_validation->set_rules('ticket_price', 'Ticket Price', 'required');
        $this->form_validation->set_rules('start_time', 'Start Time', 'required');
        $this->form_validation->set_rules('end_time', 'End Time', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('shows/create', $data);
            $this->load->view('template/footer', $data);
        } else {
            $show = array(
                'name' => $this->input->post('show_name'),
                'description' => $this->input->post('show_desc'),
                'ticket_price' => $this->input->post('ticket_price'),
                'start_time' => $this->input->post('start_time'),
                'end_time' => $this->input->post('end_time'),
            );
            
            $this->show_model->add_show($show);
            redirect('show_management', 'auto');
        }
    }

}

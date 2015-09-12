<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of shows
 *
 * @author Supun Sudaraka
 */
class Shows extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('show_model');
    }

    public function index() {
        $data['page_title'] = "Shows";
        $data['shows'] = $this->show_model->get_shows();
        $this->load->view('template/header', $data);
        $this->load->view('shows/shows_list', $data);
        $this->load->view('template/footer', $data);
    }

    public function purchase_tickets($show_id) {

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');


        $data['page_title'] = "Purchase Tickets";
        $data['show'] = $this->show_model->get_show($show_id);

        $this->form_validation->set_rules('t_name', 'Name', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('shows/purchase_tickets', $data);
            $this->load->view('template/footer', $data);
        } else {
            /*
             * ticket purchase success
             */
            $ticket_purchase = array(
                'show_id' => $show_id,
                'person' => $this->input->post('t_name'),
                'tickets_booked' => $this->input->post('num_tickets')
            );
            
            $this->show_model->purchase_ticket($ticket_purchase);
            $this->load->view('template/header', $data);
            $this->load->view('shows/purchase_success', $data);
            $this->load->view('template/footer', $data);
        }
    }

}

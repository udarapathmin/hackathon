<?php

class Animal extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Animal_Model');
    }

    function index() {
        $data['page_title'] = "Animal";
        $this->load->view('/template/header', $data);
        $this->load->view('animals/animal_form');
        $this->load->view('/template/footer');
    }

    function add_animals() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('animname', 'Animal Name', 'required');
        $this->form_validation->set_rules('birth', 'Birth Day', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('animcat', 'Animal Category', 'required');

        $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
        if ($this->form_validation->run() == FALSE) {
            $data['page_title'] = "Animal";
            $this->load->view('/template/header', $data);
            $this->load->view('animals/animal_form');
            $this->load->view('/template/footer');
        } else {
            $name = $this->input->post('animname');
            $birth = $this->input->post('birth');
            $gender = $this->input->post('gender');
            $category = $this->input->post('animcat');
            
            $this->Animal_Model->add_animals($name,$birth,$gender,$category);
            
            $data['page_title'] = "Animal";
            $this->load->view('/template/header', $data);
            $this->load->view('animals/animal_form');
            $this->load->view('/template/footer');
        }
    }

}

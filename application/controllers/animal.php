<?php

class Animal extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Animal_Model');
    }

    function index() {
        $data['page_title'] = "Animal";
        $data['animalss'] = $this->Animal_Model->view_animal_list();
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

            $this->Animal_Model->add_animals($name, $birth, $gender, $category);

            redirect('animal', 'refresh');
        }
    }

    function animal_cat() {
        $data['page_title'] = "Animal";
        $data['animalss'] = $this->Animal_Model->view_animal_category();
        $this->load->view('/template/header', $data);
        $this->load->view('animals/animal_category_form', $data);
        $this->load->view('/template/footer');
    }

    function add_animal_category() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('category', 'Animal Category', 'required');

        $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
        if ($this->form_validation->run() == FALSE) {
            $data['page_title'] = "Animal";
            $this->load->view('/template/header', $data);
            $this->load->view('animals/animal_category_form');
            $this->load->view('/template/footer');
        } else {
            $animal_category = $this->input->post('category');

            $this->Animal_Model->add_animal_category($animal_category);

            redirect('animal/animal_cat', 'refresh');
        }
    }

    function view_animal($id) {
        $data['page_title'] = "Animal";
        $data['row'] = $this->Animal_Model->get_particular_animal_details($id);
        $data['attempt'] = 1;
        $this->load->view('/template/header', $data);
        $this->load->view('animals/animal_update_form', $data);
        $this->load->view('/template/footer');
    }

    function update_animal_details() {
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
            $id = $this->input->post('animid');
            $name = $this->input->post('animname');
            $birth = $this->input->post('birth');
            $gender = $this->input->post('gender');
            $category = $this->input->post('animcat');

            $this->Animal_Model->update_animals($id, $name, $birth, $gender, $category);

            redirect('animal', 'refresh');
        }
    }

    function delete_animal($id) {
        $data['page_title'] = "Animal";
        $data['succ_message'] = "Deleted Succesfully";
        $this->Animal_Model->delete_particular_animal($id);
        $data['animalss'] = $this->Animal_Model->view_animal_list();
        $this->load->view('/template/header', $data);
        $this->load->view('animals/animal_form');
        $this->load->view('/template/footer');
    }

    function location() {
        $data['page_title'] = "Animal";
        $data['animalss'] = $this->Animal_Model->view_animal_list();
        $this->load->view('/template/header', $data);
        $this->load->view('animals/animal_location_form');
        $this->load->view('/template/footer');
    }

    function add_animal_location() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('lname', 'Animal Location', 'required');

        $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
        if ($this->form_validation->run() == FALSE) {
            $data['page_title'] = "Animal";
            $data['animalss'] = $this->Animal_Model->view_animal_list();
            $this->load->view('/template/header', $data);
            $this->load->view('animals/animal_location_form');
            $this->load->view('/template/footer');
        } else {
            $data['page_title'] = "Animal";
            $animal_name = $this->input->post('animname');
            $animal_location = $this->input->post('lname');
            $data['animalss'] = $this->Animal_Model->view_animal_list();
            $this->Animal_Model->add_animal_location($animal_location,$animal_name);
            $data['succ_message'] = 'Succesfully added';
            $this->load->view('/template/header', $data);
            $this->load->view('animals/animal_location_form');
            $this->load->view('/template/footer');
        }
    }

}

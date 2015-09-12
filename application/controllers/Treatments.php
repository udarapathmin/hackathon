<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Treatments extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('treatment_model');
        $this->load->helper('date');
    }

    public function index() {
        if (!$this->session->userdata('logged_in')) {
            redirect('login', 'refresh');
        }
        $data['query'] = $this->treatment_model->get_all_animals();
        $data['result'] = $data['query']->result();
        $data['page_title'] = "Animal Treatments";

        $this->load->view('template/header', $data);
        $this->load->view('treatments/Search_animals', $data);
        $this->load->view('template/footer', $data);
    }

    public function load_treatment($id) {
        
        
        if (!$this->session->userdata('logged_in')) {
            redirect('login', 'refresh');
        }
        $data['page_title'] = "Animal Treatments";

        
       

        //$this->form_validation->set_rules('medicine', 'Select password', 'required');
            $data['query'] = $this->treatment_model->get_all_medicine();
            $data['medicine']=$data['query']->result();
           
            $data['animal_id']=$id;
            
            

            $this->load->view('template/header', $data);
            $this->load->view('treatments/add_treatment', $data);
            $this->load->view('template/footer', $data);
        
    }

    public function add_treatment() {
        $qty=$this->input->post('qty');
        $medicine=$this->input->post('medicine');
        $prescription=$this->input->post('prescription');
        $vet_id = $this->session->userdata('id');
        $animalid=$this->session->userdata('animalid');
        
        $treatment_data = array(
            'qty'=>$qty,
            'medicine'=>$medicine,
            'prescription'=>$prescription,
            'vet_id'=>$vet_id,
            'animalid'=>$animalid
            
        );
        $data['query'] = $this->treatment_model->get_this_medicine($medicine);
        
//        $ava=$data['query']->result();
//        $available_stock=$ava['qty'];
//        $remaining_stock=$available_stock-$qty;
//        
        if($this->treatment_model->check_med_qty($medicine )){
        
        if($id=$this->treatment_model->add_treatment($treatment_data )){
           
//            $this->treatment_model->update_med_stock($remaining_stock,$medicine );
            
            $data['query'] = $this->treatment_model->get_all_medicine();
            $data['medicine']=$data['query']->result();
            $data['page_title'] = "Animal Treatments";
            $data['succ_message'] = "Treatment added successfully";
            $this->load->view('template/header', $data);
            $this->load->view('treatments/add_treatment', $data);
            $this->load->view('template/footer', $data);
        
        }else{
            $data['query'] = $this->treatment_model->get_all_medicine();
            $data['medicine']=$data['query']->result();
            $data['page_title'] = "Animal Treatments";
            $data['err_message'] = "Treatment added successfully";
            $this->load->view('template/header', $data);
            $this->load->view('treatments/add_treatment', $data);
            $this->load->view('template/footer', $data);
        }
        }else{
            $data['query'] = $this->treatment_model->get_all_medicine();
            $data['medicine']=$data['query']->result();
            $data['page_title'] = "Animal Treatments";
            $data['err_message'] = "Medicine Out of Stock";
            $this->load->view('template/header', $data);
            $this->load->view('treatments/add_treatment', $data);
            $this->load->view('template/footer', $data);
            
        }
        
    }

}

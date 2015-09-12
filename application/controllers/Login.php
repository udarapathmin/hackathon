<?php

class Login extends CI_Controller{
    
    function __construct() {
        parent::__construct();
    }
    
    function index(){
        
        if($this->session->userdata('logged_in')){
            redirect('welcome', 'refresh');
        }
        
        $data['page_title'] = "Login";
        $this->load->view('/template/header', $data);
        $this->load->view('login_form');
        $this->load->view('/template/footer');
    }
}
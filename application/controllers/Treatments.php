<?php

class Treatments extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('User_Model', '', TRUE);
    }

    function index() {
       

     
            $data['page_title'] = "Animal Treatments";
            $this->load->view('/template/header', $data);
            $this->load->view('treatments/search_treatments');
            $this->load->view('/template/footer');
      
            
        
    }

    function authenticate($password) {
        $username = $this->input->post('username');
        $result = $this->User_Model->login($username, $password);

        if ($result) {
            $sess_array = array();
            foreach ($result as $row) {
                $sess_array = array(
                    'logged_in' => TRUE,
                    'id' => $row->id,
                    'username' => $row->username,
                    'password' => $row->password,
                    'name' => $row->name,
                    'last_name' => $row->last_name,
                    'email' => $row->email,
                    'user_type' => $row->user_type
                );
                $this->session->set_userdata($sess_array);
            }
            return TRUE;
        } else {
            $this->form_validation->set_message('authenticate', "Invalid Username or Password.");
            return FALSE;
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('login', 'refresh');
    }

}

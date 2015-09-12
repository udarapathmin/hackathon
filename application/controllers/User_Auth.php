<?php

class User_Auth extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('User_Model', '', TRUE);
    }

    function index() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_authenticate');

        if ($this->form_validation->run() == FALSE) {
            $data['page_title'] = "Login";
            $this->load->view('/template/header', $data);
            $this->load->view('login_form');
            $this->load->view('/template/footer');
        } else {
            redirect('welcome', 'refresh');
        }
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

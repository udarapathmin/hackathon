<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('User_Model', '', TRUE);
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if (!$this->session->userdata('logged_in')) {
            redirect('login', 'refresh');
        }

        $data['page_title'] = "User Management";

		$this->load->view('template/header', $data);
		$this->load->view('users/admin', $data);
		$this->load->view('template/footer', $data);
	}

	public function admin()
	{
		if (!$this->session->userdata('logged_in')) {
            redirect('login', 'refresh');
        }

        $data['page_title'] = "User Management";

		$this->load->view('template/header', $data);
		$this->load->view('users/admin', $data);
		$this->load->view('template/footer', $data);
	}

	//List Admin
	public function list_admin()
	{
		if (!$this->session->userdata('logged_in')) {
            redirect('login', 'refresh');
        }

        $data['page_title'] = "List Admins";
        $data['userslist'] = $this->User_Model->listusers();

		$this->load->view('template/header', $data);
		$this->load->view('users/listadmin', $data);
		$this->load->view('template/footer', $data);
	}

	//Add Admin
	function add_admin() {
       if (!$this->session->userdata('logged_in')) {
            redirect('login', 'refresh');
        }

        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'username', "trim|required|xss_clean|min_length[5]|alpha_dash");
        $this->form_validation->set_rules('email', 'email', "trim|required|xss_clean|valid_email");
        $this->form_validation->set_rules('firstname', 'first name', "trim|required|xss_clean|alpha");
        $this->form_validation->set_rules('lastname', 'last name', "trim|required|xss_clean|alpha");
        $this->form_validation->set_rules('password', 'password', "trim|required|xss_clean");
        $this->form_validation->set_rules('cpassword', 'confirm password', "required|xss_clean|matches[password]");


        $data['page_title'] = "User Management";

		//Run form validation
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
			$this->load->view('users/addadmin', $data);
			$this->load->view('template/footer', $data);
        } else{
            $user_data = array(
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'name' => $this->input->post('firstname'),
                'last_name' => $this->input->post('lastname'),
                'password' => md5($this->input->post('password')),
                'user_Type' => 'A',
                'updated' => date('Y-m-d h:i:s a', time())
            );

            //calling model
            if($this->User_Model->adduser($user_data)){
                //Success Message
                $data['succ_message'] = 'Successfully Added New Admin';
                $this->load->view('template/header', $data);
				$this->load->view('users/addadmin', $data);
				$this->load->view('template/footer', $data);
            } else{
                $data['error_message'] = 'Failed to Add New User, Username or Email already exists';

                $this->load->view('template/header', $data);
				$this->load->view('users/addadmin', $data);
				$this->load->view('template/footer', $data);              
            }
        }
    }

    //Delete User
    function delete_user($id) {
        if (!$this->session->userdata('logged_in')) {
            redirect('login', 'refresh');
        }

        $data['navbar'] = "user";

        $data['page_title'] = 'Delete User';
        $data['name'] = $this->session->userdata('name');
        
        if($this->User_Model->deleteuser($id)){
                redirect('users/list_admin?delete=true', 'refresh');
            } else{
                redirect('users/list_admin?delete=false', 'refresh');               
            }
    }

    //Edit Account
    function edit_account() {
        if (!$this->session->userdata('logged_in')) {
            redirect('login', 'refresh');
        }

        $id = $this->session->userdata('id');

        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'username', "trim|required|xss_clean|min_length[5]|alpha_dash");
        $this->form_validation->set_rules('email', 'email', "trim|required|xss_clean|valid_email");
        $this->form_validation->set_rules('firstname', 'first name', "trim|required|xss_clean|alpha");
        $this->form_validation->set_rules('lastname', 'last name', "trim|required|xss_clean|alpha");
        $this->form_validation->set_rules('password', 'password', "trim|required|xss_clean");
        $this->form_validation->set_rules('cpassword', 'confirm password', "required|xss_clean|matches[password]");

        $data['navbar'] = "user";

        $data['page_title'] = 'Edit Admin';

        //Send Cuurent Values
        $data['userdet'] = $this->User_Model->viewuserarray($id);
        $data['uid'] = $id;

        //Run form validation
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('users/editadmin');
            $this->load->view('template/footer');
        } else{
            $user_data = array(
                'email' => $this->input->post('email'),
                'name' => $this->input->post('firstname'),
                'last_name' => $this->input->post('lastname'),
                'password' => md5($this->input->post('password')),
                'updated' => date('Y-m-d h:i:s a', time())
            );

            //calling model
            if($this->User_Model->updateuser($user_data,$id)){
                //Success Message
                $data['succ_message'] = 'Successfully Edit Admin';
                $data['userdet'] = $this->User_Model->viewuserarray($id);
                $this->load->view('template/header', $data);
	            $this->load->view('users/editadmin');
	            $this->load->view('template/footer');
            } else{
                $data['error_message'] = 'Failed to Edit Admin';
                $data['userdet'] = $this->User_Model->viewuserarray($id);
               $this->load->view('template/header', $data);
	            $this->load->view('users/editadmin');
	            $this->load->view('template/footer');                
            }
        }
    }

    function view_user($id) {
        if (!$this->session->userdata('logged_in')) {
            redirect('login', 'refresh');
        }

        $data['navbar'] = "user";

        $data['page_title'] = 'View User';
        $data['name'] = $this->session->userdata('name');
        
        if($this->User_Model->viewuser($id)){
                //Call the model to get users list
                $data['user'] = $this->User_Model->viewuser($id);

                 $this->load->view('template/header', $data);
	            $this->load->view('users/viewuser');
	            $this->load->view('template/footer'); 
            } else{
                $data['error_message'] = 'No user found';

                 $this->load->view('template/header', $data);
	            $this->load->view('users/viewuser');
	            $this->load->view('template/footer');               
            }
    }
}

<?php

class User_model extends CI_Model {

    public function login($username, $password) {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->where('password', MD5($password));
        $this->db->where('password', MD5($password));
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

     //User Functions
    public function listusers(){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_type', 'A');

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

     public function listmanager(){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_type', 'M');

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    public function listveteran(){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_type', 'V');

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    public function adduser($user) {
        $username = $user['name'] ;
        $email = $user['email'] ;
        $sql = "SELECT * FROM users WHERE username ='$username' OR email = '$email'";
        $query = $this->db->query($sql);
        if ($query->num_rows() == 0){
            if ($this->db->insert('users', $user)) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else{
            return FALSE;
        }
    }

    public function addveteran($user, $vet) {
        $username = $user['name'] ;
        $email = $user['email'] ;
        $sql = "SELECT * FROM users WHERE username ='$username' OR email = '$email'";
        $query = $this->db->query($sql);
        if ($query->num_rows() == 0){
            if ($this->db->insert('users', $user)) {
                $insert_id = $this->db->insert_id();
                $vet['userid'] = $insert_id;
                $this->db->insert('veteran', $vet);
                return TRUE;
            } else {
                return FALSE;
            }
        } else{
            return FALSE;
        }
    }

    public function deleteuser($id){
        $data = array(
               'id' => $id
            );

        if ($this->db->delete('users', $data)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

     public function viewuser($id){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id', $id);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    public function viewvet($id){
        $query = $this->db->query("SELECT * FROM users u,veteran v WHERE u.id='$id' and v.userid=u.id LIMIT 1");

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    function viewuserarray($id){
        try{
            $query = $this->db->query("SELECT * FROM users WHERE id='$id' LIMIT 1");
            if ($query->num_rows() > 0)
            {
                $ret_array = array();
               foreach ($query->result() as $row)
               {
                  $ret_array['username'] = $row->username; 
                  $ret_array['password'] = $row->password; 
                  $ret_array['email'] = $row->email; 
                  $ret_array['name'] = $row->name; 
                  $ret_array['last_name'] = $row->last_name; 
               }

               return $ret_array;
            } else{
                return FALSE;
            }
        } catch (Exception $ex) {
            return FALSE;
        }
    }

    function updateuser($data,$id){
        $this->db->where('id', $id);
        if ($this->db->update('users', $data)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

   
}
    
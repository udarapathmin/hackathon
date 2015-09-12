<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Show_model
 *
 * @author Supun Sudaraka
 */
class Show_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_shows(){
        return $this->db->get('show')->result();
    }
    
    public function add_show($show){
        $this->db->insert('show', $show);
        return TRUE;
    }
    
    public function get_show($id){
        $query = $this->db->get_where('show', array('id' => $id));
        if($query->num_rows() == 0){
            return FALSE;
        } else {
            return $query->row();
        }
    }
    
    public function purchase_ticket($data){
        $this->db->insert('show_ticket', $data);
        return TRUE;
    }
}

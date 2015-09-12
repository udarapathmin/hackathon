<?php

class Animal_Model extends CI_Model {
    
    public function add_animals($name,$birth,$gender,$category){
        $this->db->query("Insert into animal(name,birthday,gender,category_id) values('$name','$birth','$gender','$category')");
        return TRUE;
    }
    
    public function add_animal_category($animal_category){
        $this->db->query("Insert into category(name) values('$animal_category')");
        return TRUE;
    }
    
    public function view_animal_category(){
        $data = $this->db->query("select * from category");
        return $data->result();
    }
    
    public function view_animal_list(){
        $data = $this->db->query("select * from animal");
        return $data->result();
    }
    
    public function get_particular_animal_details($id){
        $data = $this->db->query("select * from animal where id='$id'");
        return $data->row();
    }
    
    public function update_animals($id,$name,$birth,$gender,$category){
        $this->db->query("update animal set name = '$name' , birthday = '$birth' , gender = '$gender' , category_id= '$category' where id='$id'");
        return TRUE;
    }
    
    public function delete_particular_animal($id){
        $this->db->query("delete from animal where id='$id'");
        return TRUE;
    }
    
    public function add_animal_location($animal_location,$animal_name){
        $this->db->query("Insert into location(location_name) values('$animal_location')");
        $loc_id = $this->db->insert_id();
        $this->db->query("update animal set location_id='$loc_id' where id='$animal_name'");
        return TRUE;
    }
    
}
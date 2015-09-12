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
    
}
<?php

class Treatment_model extends CI_Model {

   /*
     * getting all the animal details
     */

    public function get_all_animals() {
        try {
            $sql = "SELECT * FROM animal";
            if ($data =$this->db->query($sql)) {
                return $data;
                return null;
            }
        } catch (Exception $ex) {
            return null;
        }
    }
    
    public function get_all_medicine() {
        try {
            $sql = "SELECT * FROM medicine_stock";
            if ($data =$this->db->query($sql)) {
                return $data;
                return null;
            }
        } catch (Exception $ex) {
            return null;
        }
    }
     public function get_this_medicine($id) {
        try {
            $sql = "SELECT qty FROM medicine_stock where id='$id'";
            if ($data =$this->db->query($sql)) {
                return $data;
             
            }
        } catch (Exception $ex) {
            return null;
        }
    }
    
     public function update_med_stock($qty,$id) {
        try {
            $sql = "update medicine_stock FROM set qty='$qty' where id = $id";
            if ($this->db->query($sql)) {
                return true;
                
            }
        } catch (Exception $ex) {
            return null;
        }
    }
    
    public function check_med_qty($med){
          try {
            $sql = "SELECT qty FROM medicine_stock where id = '$med'";
            if ($data =$this->db->query($sql)) {
                $qunty= $data->row()->qty;
            if($qunty>0){
                return true;
                
            }else{
                return false;
                
            }
                
            }  else {
                return false;
            }
        } catch (Exception $ex) {
            return null;
        }
        
    }
    
    public function add_treatment($treatment_data ){
        
        $vet_id=$treatment_data['vet_id'];
        $animalid=$treatment_data['animalid'];
        $prescription=$treatment_data['prescription'];
        $qty=$treatment_data['qty'];
        $medicine=$treatment_data['medicine'];
      
        
         $sql = "insert into treatment (vet_id , animal_id, prescription_notes) values('$vet_id','$animalid','$prescription')";
         if ($data =$this->db->query($sql)) {
               $id = $this->db->insert_id();
                return $id;
            }
            else{
                return null;
            }
    }
    
    


   
}
    
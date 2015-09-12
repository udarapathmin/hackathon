<?php

class treatment_model extends CI_Model {

    public function get_all_animals() {
        try {
            if ($data = $this->db->query("SELECT * FROM animal")) {
                $row = $data->row();
                return $row;
            } else {
                return null;
            }
        } catch (Exception $ex) {
            return null;
        }
    }

   
}
    
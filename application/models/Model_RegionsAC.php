<?php
class Model_RegionsAC extends CI_Model{
    public function getLesRegions(){
        $sql = $this->db->query('SELECT *  FROM region');
    return $sql->result();
    }
    
}
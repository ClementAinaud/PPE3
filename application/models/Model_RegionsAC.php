<?php
class Model_RegionsAC extends CI_Model{
    public function getLesRegions(){
        $sql = $this->db->query('SELECT REG_NOM  FROM region');
    return $sql->result();
    }
}
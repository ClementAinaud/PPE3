<?php
class Model_RegionsAC extends CI_Model{
    public function getLesRegions(){
        $sql = $this->db->query('select VIS_MATRICULE,VIS_NOM,Vis_PRENOM,VIS_VILLE from visiteur ');
    return $sql->result();
    }
    
}
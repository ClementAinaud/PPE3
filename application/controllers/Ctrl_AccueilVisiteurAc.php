<?php

class Ctrl_AccueilVisiteurAc extends CI_Controller{
    public function index(){
       $this->load->model('Model_TableauVisiteurAc');
       $data ['lesVisiteurs'] = $this->Model_TableauVisiteurAc->getlesvisiteurs();
        
        
    } 
    public function getlesvisiteurs(){
        
        $this->load->view('v_FormulaireVisiteursAc');
        
    }
    public function getLesRegions(){
        $this->load->model('Model_RegionsAC');
        $data ['lesRegions'] = $this->Model_RegionsAC->getLesRegions();
        $this->load->view('v_AccueilAc',$data);
        
    }
}
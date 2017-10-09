<?php

class Ctrl_AccueilVisiteurAc extends CI_Controller{
    public function index(){
       $this->load->model('Model_TableauVisiteurAc');
        $data ['lesVisiteurs'] = $this->Model_TableauVisiteurAc->getlesvisiteurs();
        $this->load->view('v_AccueilAc',$data);
        
    } 
    public function getlesvisiteurs(){
        
        $this->load->view('v_FormulaireVisiteursAc');
        
    }
}
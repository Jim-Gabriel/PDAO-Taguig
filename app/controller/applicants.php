<?php

class applicants extends Controller{
    public function index(){
        //$data=$this->userModel->sample();
       $this->render('Applicants/list');
    }
}


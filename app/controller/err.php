<?php


class Err extends Controller{
    public function index(){
        $this->_404();
    }
    public function _404(){
        die('Error 404: Page not found');
        
    }
}



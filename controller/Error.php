<?php 

class Error extends Controller{
    public function __construct() {
        parent::__construct();
        }
        
    public function error(){
        $this->view->load('error404');
    }   
}

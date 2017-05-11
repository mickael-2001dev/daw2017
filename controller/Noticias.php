<?php

class Noticias extends Controller{

    public function __construct(){
        parent::__construct();
    }
        
    public function index(){
        $this->view->load('header_3');
        $this->view->load('news');
        $this->view->load('footer_2');
    }

    public function view_news($idNews){
    	$data['idnews'] = $idNews;
    	$this->view->load('header_3');
    	$this->view->load('viewnews',$data);
        $this->view->load('footer_2');
    }

}

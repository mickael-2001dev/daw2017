<?php

class Noticias extends Controller{

    public function __construct(){
        parent::__construct();
        $this->model = new NewsModel();
    }
        
    public function index(){
        $data['news'] = $this->model->getNews();
        $this->view->load('header_3');
        $this->view->load('news_2', $data);
        $this->view->load('footer_2');
    }

    public function view_news($idNews){
        $data['news'] = $this->model->getNewsById($idNews);
    	$this->view->load('header_2');
    	$this->view->load('viewnews',$data);
        $this->view->load('footer_2');
    }

}

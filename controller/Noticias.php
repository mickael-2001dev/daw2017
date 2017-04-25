<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Imagem
 *
 * @author IFSul
 */
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
    	$this->view->load('header_2');
    	$this->view->load('viewnews',$data);
    }

}

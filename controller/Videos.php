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
class Videos extends Controller{
    public function __construct() {
        parent::__construct();
        $this->model = new VideoModel();
    }
        
    public function index(){
    	$data['video'] = $this->model->getVideos();
        $this->view->load('header_2');
        $this->view->load('videos', $data);
    }   
}

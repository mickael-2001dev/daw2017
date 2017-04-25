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
class Login extends Controller{
    public function __construct() {
        parent::__construct();
        }
        
    public function index(){
        $this->view->load('header_3');
        $this->view->load('login');
        $this->view->load('footer_2');
    }   
}

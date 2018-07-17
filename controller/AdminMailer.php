<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminMailer
 *
 * @author IFSul
 */
class AdminMailer extends Admin{
    //put your code here
    
    public function __construct() {
        parent::__construct();
        //instanciar o model do newsletter
    }
    
    public function send($mail, $msg, $replyUser = null, $theme = "Nova Notícia!") {
     
        $mail = new Email($mail, $theme, $msg, null, $replyUser);
        if($mail->send()) {
            return true;
        } else {
            return false;
        }

    }
}

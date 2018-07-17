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
class Contato extends Controller{
    public function __construct() {
        parent::__construct();
        $this->model = new MailModel();
    }
        
    private function addEmail() {
        $data['msg'] = '';
        if(filter_input(INPUT_POST, 'add')) {
            $mail = filter_input(INPUT_POST, 'mail');
            if($this->model->insertMail($mail)) {
                $data['msg'] = "Email Cadatrado com sucesso!";
            } else {
                $data['msg'] = "Erro ao cadastrar email!";
            }
        }

        return $data['msg'];
    }

    private function sendMsg() {
         $data['msg'] = '';
        if(filter_input(INPUT_POST, 'send')) {
            $mailer = [];
           
            $ms_mail = filter_input(INPUT_POST, 'ms_mail');
            $msg = filter_input(INPUT_POST, 'msg');
            $msg = $msg.' Por '.$ms_mail;

            $mailer['toUser'] = new Email($ms_mail, 'Email Recebido', 'Obrigado por nós contatar, sua mensagem será respondida em breve.');
            $mailer['toUser']->send();

            $mailer['toAdmin'] = new Email('mickael.souza.if@gmail.com', 'Nova mensagem!', $msg, null, $ms_mail);
            if($mailer['toAdmin']->send()) {
                $data['msg'] = "Mensagem enviada!";
            }
        } 

        return $data['msg'];
    }

    public function index(){
        if(filter_input(INPUT_POST, 'add')) {
            $data['msg'] = $this->addEmail();
        } else if(filter_input(INPUT_POST, 'send')) {
            $data['msg'] = $this->sendMsg();
        }
    	
    	$this->view->load('header_3');
        $this->view->load('contato', $data);
        $this->view->load('footer_2');
    }   

}

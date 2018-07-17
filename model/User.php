<?php

class User {

    private $id;
    private $login;
    private $senha;
    private $username;
    //private $hq;

    public function __construct($login, $senha, $username = null, $id = null) {
        $this->id  = $id;
        $this->senha = $senha;
        $this->username = $username;
        $this->login = $login;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getSenha() {
        return $this->senha;
    }
	
    public function getUsername() {
        return $this->username;
    }

    public function getId() {
        return $this->id;
    }
    

}

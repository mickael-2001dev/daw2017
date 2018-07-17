<?php 

class Admin extends Controller{

    protected $login;

    public function __construct() {
        parent::__construct();
        $this->view->setTemplate('admin');
        $this->login = new Login();

        if(!$this->login->isLogged()) {
            $this->login();
            die;
        }
    }
        
    public function index(){
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('index');
        $this->view->load('footer');
    } 

    public function login(){
        $data = null;
        
        if(filter_input(INPUT_POST,'login')) {
            $indexes = $this->indexInput($_POST);

            if($indexes) {
                if($this->login->verifyLogin(new User($indexes['login'], $indexes['senha']))) {
                    if($indexes['remember']) {
                        $this->login->createCookie();
                    }
                    $this->login->createSession();
                } else {
                    $data['msg'] = "Login ou Senha invalidos!";
                } 
            } else {
                $data['msg'] = "Preencha todos os campos!";
            }

        
        }

        if($this->login->isLogged()) {
                $this->reload();
        } else {
                $this->view->load('login', $data);
        }
       
        
    }

    public function logout(){
        $this->login->logout();
        header('location:' . $this->config->base_url . 'Admin');
    }  

    protected function indexInput(array $indexForm){
        $index = [];

        foreach ($indexForm as $key => $value) {
            $index [$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_STRING);
        }

        return $index;
    }   
}

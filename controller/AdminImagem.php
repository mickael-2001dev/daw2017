<?php 

class AdminImagem extends Admin{
    public function __construct() {
        parent::__construct();
        	$this->model = new ImagemModel();
        }
        
    public function index(){
        $data['imagens'] = $this->model->getImagens();
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('imagens', $data);
        $this->view->load('footer');
    }   

    public function addImagens(){
        $data['msg'] = '';
        if(filter_input(INPUT_POST, 'add')) {
            $image = $_FILES['file'];

            $types = ['image/jpeg', 'image/png', 'image/gif'];
            $type_image = false;
            $dir = 'view/img/'.$image['name'];

            foreach($types as $type){
                if($image['type'] == $type){
                    $type_image = true;
                }
            }

            if($type_image){

                if(move_uploaded_file($image['tmp_name'], $dir)){
                    $this->model->insertImagens(new Imagem($image['name']));
                     header('location:' . $this->config->base_url . 'AdminImagem');
                  
                } else {
                    $data['msg'] = "Não foi possível realizar o upload!";
                }
            } else {
                 $data['msg'] = "Tipo de arquivo não suportado!";
            }

        }
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('add_imagens', $data);
        $this->view->load('footer');
    }

    public function updateImagens($id){
        $data['msg'] = '';
        $data['image'] = $this->model->getImagensById($id);
        if(filter_input(INPUT_POST, 'add')) {
            if($_FILES){

                $image = $_FILES['file'];

                $types = ['image/jpeg', 'image/png', 'image/gif'];
                $type_image = false;
                $dir = 'view/img/'.$image['name'];

                foreach($types as $type){
                    if($image['type'] == $type){
                        $type_image = true;
                    }
                }

                if($type_image){

                    if(move_uploaded_file($image['tmp_name'], $dir)){
                        if($this->model->updateImagens(new Imagem($image['name'], $id))){
                            header('location:' . $this->config->base_url . 'AdminImagem');
                        } else {
                             $data['msg'] = "Não foi possível realizar o update!";   
                        }
                        
                      
                    } else {
                        $data['msg'] = "Não foi possível realizar o upload!";
                    }
                } 

            } else {
               $image = filter_input(INPUT_POST, 'default_image', FILTER_SANITIZE_STRING); 
               $this->model->upateImagens(new Imagem($image, $id));
               header('location:' . $this->config->base_url . 'AdminImagem');
            }
            

        }
        

        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('edit_imagens', $data);
        $this->view->load('footer');
    }

    public function delete($id) {
        if($this->model->deleteImage($id)){
             header('location:' . $this->config->base_url . 'AdminImagem'); 
        }
    }
    
  
}

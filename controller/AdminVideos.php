<?php 

class AdminVideos extends Admin{
    public function __construct() {
        parent::__construct();
        	$this->model = new VideoModel();
        }
        
    public function index(){
        $data['video'] = $this->model->getVideos();
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('videos', $data);
        $this->view->load('footer');
    }   

    public function addVideos(){
        $data['msg'] = '';
        if(filter_input(INPUT_POST, 'add')) {
            $video = filter_input(INPUT_POST, 'video', FILTER_SANITIZE_STRING);
            if($video){
                if($this->model->updateVideos($video)){
                    $this->index();
                    die;
                } else {
                    $data['msg'] = "Não deu, cara!";
                }
            } else {
                $data['msg'] = "Infome todos os campos";
            }
            

        }
        

        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('add_videos', $data);
        $this->view->load('footer');
    }

    public function updateVideos($id){
        $data['video'] = $this->model->getVideoById($id);
        //var_dump($data['video']);
        $data['msg'] = '';
        if(filter_input(INPUT_POST, 'add')) {
            $video = filter_input(INPUT_POST, 'video', FILTER_SANITIZE_STRING);
            if($video && $id){
                if($this->model->updateVideos(new Video($video, $id))){
                     header('location:' . $this->config->base_url . 'AdminVideos');
                } else {
                    $data['msg'] = "Não deu, cara!";
                }
            } else {
                $data['msg'] = "Infome todos os campos";
            }
            

        }
        

        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('edit_videos', $data);
        $this->view->load('footer');
    }

    public function delete($id) {
        if($this->model->deleteVideo($id)) {
            header('location:' . $this->config->base_url . 'AdminVideos');
        }
    }
   
}

<?php 

class AdminNews extends Admin{
    public function __construct() {
        parent::__construct();
        	$this->model = new NewsModel();
    }
        
    public function index(){
        $data['news'] = $this->model->getNews();
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('noticias', $data);
        $this->view->load('footer');
    }   

    /*public function showNews(){
        print $this->model->getNewsJson();
    }

    public function error(array $data){
        $this->view->load('error', $data);
    } 

    public function success(array $data){
        $this->view->load('success', $data);
    }*/

    private function sendMail() {
        $news_id  =  $this->model->getLatestId();
        $news_id = (int) $news_id [0]['idnews'];
        $news_title = $this->model->getNewsById($news_id);
        $title = (string) $news_title->getTitlenews();
        $results = [];
        $true_result = 0;
                

        if($_SERVER['HTTP_HOST'] == 'localhost')
            $link = '<a href="http://localhost/daw2017/mickaelbraz/Noticias/view_news/'.$news_id.'">Ver Notícia</a>';
        else
            $link = '<a href="http://200.132.49.218/daw2017/mickaelbraz/Noticias/view_news/'.$news_id.'">Ver Notícia</a>';    

        $msg = $title."! ".$link;

        $mail = new MailModel();
        $mail = $mail->getMail();
        $mailer = new AdminMailer();

        foreach ($mail as $row) {
            $results[] = $mailer->send($row->getMail(), $msg);

        }

        for ($i=0; $i < count($results); $i++) { 
            if($results[$i] == true) {
                $true_result++;
            }
        }

        if($true_result == count($results)) {
            return true;
        } else {
            return false;
        }
        
    }

    public function addNews(){
        $data['msg'] = '';
        if(filter_input(INPUT_POST, 'add')) {
            $titlenews = filter_input(INPUT_POST, 'titlenews', FILTER_SANITIZE_STRING);
            $articlenews = filter_input(INPUT_POST, 'articlenews', FILTER_SANITIZE_STRING);
            $datenews = filter_input(INPUT_POST, 'datenews', FILTER_SANITIZE_STRING);
            $mainarticle = filter_input(INPUT_POST, 'mainarticle', FILTER_SANITIZE_STRING);


            if($titlenews && $articlenews && $datenews && $mainarticle) {
                if($this->model->insertNews(new News($titlenews, $articlenews, $mainarticle, $datenews))) {
                  
                    if($this->sendMail()) {
                        header('location:' . $this->config->base_url . 'AdminNews'); 
                    } else {
                        $data['msg'] = 'Falha no envio de emails!';
                    }
                  
                  

                } else {
                    $data['msg'] = 'Não deu, cara!';
                }

            } else {
                $data['msg'] = 'Informe Todos os campos';
            }

        }
        
        
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('add_noticias', $data);
        $this->view->load('footer');
    }

    public function updateNews($idnews){
        $data['msg'] = '';
        $data['news'] = $this->model->getNewsById($idnews);        
        if(filter_input(INPUT_POST, 'add')) {
            $titlenews = filter_input(INPUT_POST, 'titlenews', FILTER_SANITIZE_STRING);
            $articlenews = filter_input(INPUT_POST, 'articlenews', FILTER_SANITIZE_STRING);
            $datenews = filter_input(INPUT_POST, 'datenews', FILTER_SANITIZE_STRING);
            $mainarticle = filter_input(INPUT_POST, 'mainarticle', FILTER_SANITIZE_STRING);


            if($titlenews && $articlenews && $datenews && $mainarticle) {
                if($this->model->updateNews(new News($titlenews, $articlenews, $mainarticle, $datenews, null, null, $idnews))) {
                    header('location:' . $this->config->base_url . 'AdminNews');
                } else {
                    $data['msg'] = 'Não deu, cara!';
                }

            } else {
                $data['msg'] = 'Informe Todos os campos';
            }

        }
        
        
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('edit_noticias', $data);
        $this->view->load('footer');
    }


   /* public function formNews(){
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('add_noticias');
        $this->view->load('footer');
    }

    public function addNews(){
        if($_POST) {
            $titlenews = filter_input(INPUT_POST, 'titlenews', FILTER_SANITIZE_STRING);
            $articlenews = filter_input(INPUT_POST, 'articlenews', FILTER_SANITIZE_STRING);
            $datenews = filter_input(INPUT_POST, 'datenews', FILTER_SANITIZE_STRING);
            $mainarticle = filter_input(INPUT_POST, 'mainarticle', FILTER_SANITIZE_STRING);


            if($titlenews && $articlenews && $datenews && $mainarticle) {
                if($this->model->insertNews(new News($titlenews, $articlenews, $mainarticle, $datenews))) {
                    $data['msg'] = "Notícia inserida com sucesso!";
                    $data['link'] = "AdminNews";
                    $this->success($data);
                } else {
                    $data['msg'] = 'Não deu, cara!';
                    $this->error($data);
                }

            } else {
                $data['msg'] = 'Informe Todos os campos';
                $this->error($data);
            } 
        }
    }*/

    public function selectImage(){
        $data['msg'] = '';
        $img = new ImagemModel();
        $data['img'] = $img->getImagens();
        $data['news'] = $this->model->getNewsWithoutImage();

        if(filter_input(INPUT_POST, 'add')) {
            $image = filter_input(INPUT_POST, 'image', FILTER_SANITIZE_STRING);
            $news =  filter_input(INPUT_POST, 'news', FILTER_SANITIZE_STRING);

            if($image && $news) {
                if($this->model->insertNewsImagem($news, $image)) {
                     header('location:' . $this->config->base_url . 'AdminNews'); 
                } else {
                    $data['msg'] = 'Não deu, cara!';
                }

            } else {
                $data['msg'] = 'Informe Todos os campos';
            }

        }

        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('select_image', $data);
        $this->view->load('footer');

    }

    public function selectVideo(){
        $data['msg'] = '';
        $video = new VideoModel();
        $data['video'] = $video->getVideos();
        $data['news'] = $this->model->getNewsWithoutImage();

          if(filter_input(INPUT_POST, 'add')) {
            $video = filter_input(INPUT_POST, 'video', FILTER_SANITIZE_STRING);
            $news =  filter_input(INPUT_POST, 'news', FILTER_SANITIZE_STRING);
            if($video && $news) {
                if($this->model->insertNewsVideo($news, $video)) {
                     header('location:' . $this->config->base_url . 'AdminNews'); 
                } else {
                    $data['msg'] = 'Não deu, cara!';
                }

            } else {
                $data['msg'] = 'Informe Todos os campos';
            }

        }

        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('select_video', $data);
        $this->view->load('footer');

    }

    public function delete($id) { 
        if($this->model->deleteNews($id)){
            header('location:' . $this->config->base_url . 'AdminNews'); 
        }
    }
}


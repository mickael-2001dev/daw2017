<?php

class NewsModel extends Model{
    
    public function getNews() {
        $list_news = [];
        $sql = "SELECT * FROM news";
        $results= $this->ExecuteQuery($sql, array());
        
        foreach($results as $row) {
            $list_news[] = new News(
                $row['titlenews'],
                $row['articlenews'],
                $row['mainarticle'],
                $row['datenews'],
                $this->getImagensById($row['idnews']),
                $this->getVideosById($row['idnews']),
                $row['idnews']
            );
        }
        
        return $list_news;
        
    }

    public function getNewsJson() {
        $list_news = [];
        $sql = "SELECT * FROM news";
        $results= $this->ExecuteQuery($sql, array());
        
        return json_encode($results);
        
    }

    public function getLatestId() {
        $sql = "SELECT idnews FROM news ORDER BY idnews DESC LIMIT 1";
        $results = $this->ExecuteQuery($sql, array());

        return $results;
    }

    public function getNewsWithoutImage() {
        $list_news = [];
        $sql = "SELECT * FROM news";
        $results= $this->ExecuteQuery($sql, array());
        
        foreach($results as $row) {
            $list_news[] = new News(
                $row['titlenews'],
                $row['articlenews'],
                $row['mainarticle'],
                $row['datenews'],
                null,
                null,
                $row['idnews']
            );
        }
        
        return $list_news;
        
    }


    public function getNewsById($idnews) {
        $sql = "SELECT * FROM news as ne WHERE ne.idnews = :idnews;";
        $news = $this->ExecuteQuery($sql, [':idnews' => $idnews])[0];
        $listnoticia = $this->getImagensById($idnews);
        $listvideo = $this->getVideosById($idnews);
        return new News(
                $news['titlenews'],
                $news['articlenews'],
                $news['mainarticle'],
                $news['datenews'],
                $listnoticia,
                $listvideo,
                $news['idnews']
            );
    }

    private function getImagensById($idnews) {

        $sql = "SELECT i.*,ne.* FROM noticias_has_image as ni
                INNER JOIN  image as i ON i.idimage = ni.image_idimage
                INNER JOIN news as ne ON ne.idnews = ni.news_idnews 
                WHERE ne.idnews = :idnews";
        $results = $this->ExecuteQuery($sql, [':idnews' => $idnews]);
        if($results){
            foreach ($results as $row) {

                $listimagens[] = new Imagem(
                    $row['localimage'], null,  $row['idimage']
                );

            
            }

            return $listimagens;
        } else {
            return null;
        }
       
       
    }

    private function getVideosById($idnews) {

        $sql = "SELECT ne.*,v.* FROM videos_has_noticias as vi
                INNER JOIN news as ne ON ne.idnews = vi.news_idnews 
                INNER JOIN  videos as v ON v.idvideos = vi.videos_idvideos
                WHERE ne.idnews = :idnews";
        $results = $this->ExecuteQuery($sql, [':idnews' => $idnews]);
        if($results){
            foreach ($results as $row) {

                $listvideos[] = new Video(
                    $row['linkvideo'], $row['idvideos']
                );

            
            }

            return $listvideos;
        } else {
            return null;
        }
       
       
    }

    public function insertNews($noticia) {

        $sql = "INSERT INTO news (titlenews, articlenews, mainarticle, datenews) 
                VALUES (:titlenews,:articlenews, :mainarticle, :datenews)";

        if($this->ExecuteCommand($sql,[':titlenews'=>$noticia->getTitlenews(), ':articlenews'=>$noticia->getArticlenews(), 
            ':mainarticle'=>$noticia->getMainarticle(), ':datenews'=>$noticia->getDatenews()]))   {
            return true;
        } else {
            return false;
        }
    }

    public function insertNewsImagem($noticia, $image) {
        $sql = "INSERT INTO noticias_has_image (news_idnews, image_idimage) 
                VALUES (:news,:image)";
        if($this->ExecuteCommand($sql,[':news'=>$noticia, ':image'=>$image]))   {
            return true;
        } else {
            return false;
        }
    }

    public function insertNewsVideo($noticia, $video) {
        $sql = "INSERT INTO videos_has_noticias (videos_idvideos, news_idnews) 
                VALUES (:video,:news)";
        if($this->ExecuteCommand($sql,[':video'=>$video, ':news'=>$noticia]))   {
            return true;
        } else {
            return false;
        }
    }

    public function updateNews($noticia) {
        $sql = "UPDATE news SET titlenews = :titlenews, articlenews = :articlenews,
         mainarticle = :mainarticle, datenews = :datenews WHERE idnews = :idnews";
        if($this->ExecuteCommand($sql,[':titlenews'=>$noticia->getTitlenews(), ':articlenews'=>$noticia->getArticlenews(), 
            ':mainarticle'=>$noticia->getMainarticle(), ':datenews'=>$noticia->getDatenews(), ':idnews'=>$noticia->getIdnews()]))   {
            return true;
        } else {
            return false;
        }
    }

     public function deleteNews($id) {
        $sql = "DELETE FROM news WHERE idnews = :idnews";
        if($this->ExecuteCommand($sql, [':idnews'=>$id])){
            return true;
        } else {
            return false;
        }
    }

}

<?php

class VideoModel extends Model {
    
    public function getVideos(){
        $listvideos = [];
        $sql = "SELECT * FROM videos";
        $results = $this->ExecuteQuery($sql, array());              
        foreach ($results as $row){
            $listvideos[] = new Video(
                $row['linkvideo'],
                $row['idvideos']
            );            
        }
        return $listvideos;
    }

    public function getVideoById($id){
        $sql = "SELECT * FROM videos WHERE idvideos = :id";
        $results = $this->ExecuteQuery($sql, [':id'=>$id])[0];              

        return new Video($results['linkvideo'], $results['idvideos']);
    }

    public function insertVideos($video){
        $sql = "INSERT INTO videos (linkvideo)
        VALUES(:linkvideo)";

        if($this->ExecuteCommand($sql,[':linkvideo'=>$video])) {
            return true;
        } else {
            return false;
        }
    }

    public function updateVideos($video){
        $sql = "UPDATE videos SET linkvideo =
        :linkvideo WHERE idvideos = :idvideos";

        if($this->ExecuteCommand($sql,[':linkvideo'=>$video->getLinkvideo(),':idvideos'=>$video->getIdvideo()])) {
            return true;
        } else {
            return false;
        }
    }

     public function deleteVideo($id) {
        $sql = "DELETE FROM videos WHERE idvideos = :idvideos";
        if($this->ExecuteCommand($sql, [':idvideos'=>$id])){
            return true;
        } else {
            return false;
        }
    }
}

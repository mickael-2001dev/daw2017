<?php

class ImagemModel extends Model {
    
    public function getImagens(){
        $listimages = [];
         
        $sql = "SELECT * FROM image";
        $results = $this->ExecuteQuery($sql, array());              
        foreach ($results as $row){
            $listimages[] = new Imagem(
                $row['localimage'],
                 $row['idimage']  
            );      
       
        }
                 
        
        return $listimages;
    }

    public function getImagensById($id){
        $listimages = "";
        $sql = "SELECT * FROM image WHERE idimage = :id";
        $results = $this->ExecuteQuery($sql, [':id' => $id]);              
        foreach ($results as $row){
             $listimages = new Imagem(
                $row['localimage'],
                $row['idimage']   
            );      
        }
        return $listimages;
    }

    public function insertImagens($imagem){
        $sql = "INSERT INTO image (localimage)
        VALUES(:localimage)";

        if($this->ExecuteCommand($sql,[':localimage'=>$imagem->getLocalimage()])) {
            return true;
        } else {
            return false;
        }
    }

    public function updateImagens($imagem){
        $sql = "UPDATE image SET localimage =
        :localimage WHERE idimage = :id";

        if($this->ExecuteCommand($sql,[':localimage'=>$imagem->getLocalimage(), ':id'=>$imagem->getIdimage()])) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteImage($id){
        $sql = "DELETE FROM image WHERE idimage = :id";

        if($this->ExecuteCommand($sql,[':id'=>$id])) {
            return true;
        } else {
            return false;
        }
    }


}

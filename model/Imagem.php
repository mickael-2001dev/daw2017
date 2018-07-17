<?php

class Imagem {

    private $idimage;
    private $localimage;
    //private $hq;

    public function __construct($localimage,  $idimage = null /*$hq = null*/) {
        $this->idimage = $idimage;
        $this->localimage = $localimage;
	    //$this->hq = $hq;
    }

    public function getIdimage() {
        return $this->idimage;
    }


    public function getLocalimage() {
        return $this->localimage;
    }
	
    //public function getHq() {
        //return $this->hq;
    //}

   // public function setHq($hq) {
       // $this->Hq = hq;
    //}

    public function setIdimage($idimage) {
        $this->idimage = $idimage;
    }

    public function setLocalimage($localimage) {
        $this->localimage = $localimage;
    }

}

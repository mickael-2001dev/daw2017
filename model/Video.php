<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Video
 *
 * @author IFSul
 */
class Video {

    private $idvideo;
    private $linkvideo;

    public function __construct($linkvideo ,$idvideo = null) {
        $this->idvideo = $idvideo;
        $this->linkvideo = $linkvideo;
    }

    public function getIdvideo() {
        return $this->idvideo;
    }

    public function getLinkvideo() {
        return $this->linkvideo;
    }

    public function setIdvideo($idvideo) {
        $this->idvideo = $idvideo;
    }

    public function setLinkvideo($linkvideo) {
        $this->linkvideo = $linkvideo;
    }

}

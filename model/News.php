<?php

class News {
    private $idnews;
    private $titlenews;
    private $articlenews;
    private $mainarticle;
    private $datenews;
    private $listimagens;
    private $listvideos;
    
    public function __construct($titlenews, $articlenews, $mainarticle, $datenews, array $listimagens = null, $listvideos = null, $idnews = null) {
        $this->idnews = $idnews;
        $this->titlenews = $titlenews;
        $this->articlenews = $articlenews;
        $this->mainarticle = $mainarticle;
        $this->datenews = $datenews;
        $this->listimagens = $listimagens;
        $this->listvideos = $listvideos;
    }
    
    public function getIdnews() {
        return $this->idnews;
    }

    public function getTitlenews() {
        return $this->titlenews;
    }

    public function getArticlenews() {
        return $this->articlenews;
    }

    public function getMainarticle() {
        return $this->mainarticle;
    }

    public function getDatenews() {
        return $this->datenews;
    }

    public function getListimagens() {
        return $this->listimagens;
    }

    public function getListvideos() {
        return $this->listvideos;
    }

    public function setIdnews($idnews) {
        $this->idnews = $idnews;
    }

    public function setTitlenews($titlenews) {
        $this->titlenews = $titlenews;
    }

    public function setArticlenews($articlenews) {
        $this->articlenews = $articlenews;
    }

    public function setMainarticle($mainarticle) {
        $this->mainarticle = $mainarticle;
    }

    public function setDatenews($datenews) {
        $this->datenews = $datenews;
    }

    public function setListimagens($listimagens) {
        return $this->listimagens = $listimagnes;
    }

    
}

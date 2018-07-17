<?php

class Hq {

    private $idhq;
    private $linkhq;
    private $hqtitle;

    public function __construct($idhq, $linkhq, $hqtitle) {
        $this->idhq = $idhq;
        $this->linkhq = $linkhq;
        $this->hqtitle = $hqtitle;
    }

    public function getIdhq() {
        return $this->idhq;
    }

    public function getLinkhq() {
        return $this->linkhq;
    }

    public function getHqtitle() {
        return $this->hqtitle;
    }

    public function setIdhq($idhq) {
        $this->idhq = $idhq;
    }

    public function setLinkhq($linkhq) {
        $this->linkhq = $linkhq;
    }

    public function setHqtitle($hqtitle) {
        $this->hqtitle = $hqtitle;
    }

}

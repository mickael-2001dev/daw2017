<?php 

class Mail {
	private $id;
	private $mail;

	public function __construct($mail, $id = null) {
		$this->id = $id;
		$this->mail = $mail;
	}

	public function getMail() {
		return $this->mail;
	}

	public function getId() {
		return $this->id();
	}
}
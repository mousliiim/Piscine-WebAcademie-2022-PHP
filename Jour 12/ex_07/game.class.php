<?php
include('character.class.php');

class Game {
	    private $length;
	    private $players;

	public function __construct($class){
		
	}

    public function addPlayer($class){
		return $this->length;
	}

	public function __toString(){
		return "New game !" . PHP_EOL;
	}
}
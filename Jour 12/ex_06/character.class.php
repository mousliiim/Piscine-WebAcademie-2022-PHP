<?php

class Character{
	    private $name;
	    private $strength = 0;
	    private $magic = 0;
	    private $intelligence = 0;
	    private $life = 100;
		public static $inc = 1;

	public function __construct($name = NULL){
		
		if($name == NULL){
			$name = "character" . self::$inc;
		}
		self::$inc++;
		$this->name = $name;

	}
	public function getName($name){
		return $this->name;
	}
	public function getStrength($strength){
		return $this->strength;
	}
	public function getMagic($magic){
		return $this->magic;
	}
	public function getIntelligence($intelligence){
		return $this->intelligence;
	}
	public function getLife($life){
		return $this->life;
	}
	public function __toString(){
		return "My name is $this->name" . PHP_EOL;
	}
}
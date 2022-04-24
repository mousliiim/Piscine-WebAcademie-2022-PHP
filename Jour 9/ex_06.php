<?php

Class Character {
    protected $name;
    protected $endurance = 50;
    protected $agility = 2;
    protected $strength = 2;
    protected $mana = 2;
    const CLASSE = "Character";

    public function __construct($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function getEndurance(){
        return $this->endurance;
    }

    public function getAgility(){
        return $this->agility;
    }

    public function getStrength(){
        return $this->strength;
    }

    public function getMana(){
        return $this->mana;
    }

    public function getClasse(){
        return $this::CLASSE;
    }
}

class Paladin extends Character
{
	protected $name;
	protected $endurance = 100;
	protected $strength = 10;
	protected $agility = 8;
	protected $mana = 3;
 
	public function __construct($name)
	{
		$this->name = $name;
		echo $this->name . ": I'll engrave my name in the history !" . PHP_EOL;
		}
		public function attack()
		{
		echo $this->name . ": I'll crush you with my hammer !" . PHP_EOL;
		}
		public function __destruct()
		{
		echo $this->name . ": Aarrg I can't believe I'm dead..." . PHP_EOL;
		}
}
 
class Mage extends Character
{
	protected $name;
	protected $endurance = 70;
	protected $strength = 3;
	protected $agility = 10;
	protected $mana = 10;
 
	public function __construct($name)
		{
		$this->name = $name;
		echo $this->name . ": May the gods be with me." . PHP_EOL;
		}
		public function attack()
		{
		echo $this->name . ": Feel the power of my magic !" . PHP_EOL;
		}
		public function __destruct()
		{
		echo $this->name . ": By the four gods, I passed away..." . PHP_EOL;
		}
}

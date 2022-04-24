<?php

class Pony{
    private $name;
    private $gender;
    private $color;

    public function __construct($name, $gender, $color){
        $this->name = $name;
        $this->gender = $gender;
        $this->color = $color;
    }

    public function __toString(){
        return "Don't worry, I'm a pony !" . PHP_EOL;
    }

    public function __destruct(){
        echo "I'm a dead pony." . PHP_EOL;
    }

    public function speak(){
        echo "Hiii hiii hiiii" . PHP_EOL;
    }

    public function __call($name, $arguments){
        echo "I don't know what to do..." . PHP_EOL;
    }

    public function __get($arg){
        if(property_exists(get_class($this),$arg)){
            echo "Ce n'est pas bien de getter un attribut qui est privé !" . PHP_EOL;
            return $this->$arg;
        }
        else{
            echo "Il n'y a pas d'attribut : " . $arg . "." . PHP_EOL;
        }
    }

    public function __set($arg, $value){
        if(property_exists(get_class($this),$arg)){
            echo "Ce n'est pas bien de setter un attribut qui est privé !" . PHP_EOL;
            return $this->$arg = $value;
        }
        else{
            echo "Il n'y a pas d'attribut : " . $arg . "." . PHP_EOL;
        }
    }
}

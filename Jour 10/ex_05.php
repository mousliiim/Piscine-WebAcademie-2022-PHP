<?php

class Pony{
    public $name;
    public $gender;
    public $color;

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
}
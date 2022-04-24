<?php

class Dolly{
    public $animal;
    public $age;
    public $doctor;

    public function __construct($animal, $age, $doctor){
        $this->animal = $animal;
        $this->age = $age;
        $this->doctor = $doctor;
    }

    public function __clone(){
        echo "I will survive !" . PHP_EOL;
    }
}

function clone_object($object){
    $rtr = clone $object;
    return $rtr;
}
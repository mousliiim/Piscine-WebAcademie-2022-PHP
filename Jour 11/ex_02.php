<?php

interface iCars{
    public function getPrice();
    public function getWeight();
    public function mineIsBigger($obj);
}

class BMW implements iCars{
    private $_price;
    private $_weight;

    public function __construct($_price, $_weight = 4242){
        $this->_price = $_price;
        $this->_weight = $_weight;
    }

    public function getWeight(){
        return $this->_weight;
    }

    public function getPrice(){
        return $this->_price;
    }

    public function mineIsBigger($obj){
        if(get_class($obj) == "Toyota")
        echo "Mine is bigger";
        elseif(get_class($obj) == "Smart")
        echo "Mine is way bigger !";
        elseif(get_class($obj) == "Velib")
        echo "LOL";
        else
        echo "Show me !";
    }

   public static function lessExpensive(){
       return 15000;
   }

}

class Suzuki implements iCars{
    private $_price;
    private $_weight;

    public function __construct($_price, $_weight = 4242){
        $this->_price = $_price;
        $this->_weight = $_weight;
    }

    public function getWeight(){
        return $this->_weight;
    }

    public function getPrice(){
        return $this->_price;
    }

    public function mineIsBigger($obj){
        if(get_class($obj) == "Toyota")
        echo "Mine is bigger";
        elseif(get_class($obj) == "Smart")
        echo "Mine is way bigger !";
        elseif(get_class($obj) == "Velib")
        echo "LOL";
        else
        echo "Show me !";
    }

   public static function lessExpensive(){
       return 5000;
   }

}
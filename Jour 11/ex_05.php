<?php

class Pangolin{
        private $_name;

        public function correct($object){
             $reflection = new ReflectionClass($object);
             $classname = $reflection->getName();
             $instantiable = $reflection->isInstantiable();
             $implement = $reflection->implementsInterface("Iperso");
             $issubclass = $reflection->isSubclassOf('aUnit');

             $refl_aUnit = new ReflectionClass('aUnit');
             $instance= $refl_aUnit->isInstantiable();


        if (isset($classname) && $classname == "Arcaniste" && $instantiable){
            echo "Test 0 : Good !" . PHP_EOL;
        }
        
        elseif (!isset($classname) || $classname != "Arcaniste" ){
            echo "Test 0 : KO." . PHP_EOL;
        }

        if ($implement){
            echo "Test 1 : Good !" . PHP_EOL;

        }

        elseif (!$implement){
            echo "Test 1 : KO." . PHP_EOL;
        }

        if ($issubclass){
            echo "Test 2 : Good !" . PHP_EOL;
        }

        elseif(!$issubclass){
            echo "Test 2 : KO." . PHP_EOL;
        }

        if (!$instance) {
            echo "Test 3 : Good !" . PHP_EOL;
        }

        elseif($instance){
            echo "Test 3 : KO." . PHP_EOL;
        }
    }

}
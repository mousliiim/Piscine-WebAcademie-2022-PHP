<?php

function cesar2($string){
            $string = strtolower($string);
            $resultat = "";
        for ($i=0; $i < strlen($string); $i++){ 
            if ($string[$i] == "y"){
                $resultat .= "a";
            } 
            elseif ($string[$i] == "z"){
                $resultat .= "b";
            } 
            elseif (ord($string[$i]) >= 97 && ord($string[$i]) <= 120){
                $resultat .= chr(ord($string[$i]) + 2);
            }
            else{
                $resultat .= $string[$i];
            }
        }
        echo $resultat . PHP_EOL;
    }
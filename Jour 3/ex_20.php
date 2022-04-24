<?php
function spupof($str){

$str=str_split($str);

for ($i=0; $i < count($str) ; $i++) {

global $result;

if ($str[$i] == "z" || $str[$i] == "Z") {

$str[$i] = "a";

}

else if(ord($str[$i])<= chr(65) || ord($str[$i]) >= chr(90)){

$str[$i]++;

}

$result = strtolower($str[$i]);

echo $result;

}

echo "\n";
}

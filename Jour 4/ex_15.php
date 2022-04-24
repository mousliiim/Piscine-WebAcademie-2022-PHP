<?php
function make_it_rain($my_array){
foreach($my_array as &$value){
$value = "rain";
}
var_dump($my_array);
}
$arra = ["Fun", "Test", "Trois", "Quatre"];

make_it_rain($arra);

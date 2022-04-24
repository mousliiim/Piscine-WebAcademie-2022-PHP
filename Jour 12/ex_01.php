<?php
function printArray($array){
    foreach($array as $key => $value){
        echo $key . " => " . "$value" . PHP_EOL;
    }
}
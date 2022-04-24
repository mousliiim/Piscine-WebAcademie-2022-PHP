<?php

function my_sort(&$arr){
    static $inc= 0;
    $inc++;

    $startof = array_shift($arr);
    $fin = array_pop($arr);
    array_push($arr, $startof);
    array_unshift($arr, $fin);
    return $inc;
}
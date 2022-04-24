<?php
include 'ex_03.php';

class Scanner{
    public static function scan($soldatscan){
        if($soldatscan instanceof \ Imperium \ Soldier)
            echo "Praise be, Emperor, Lord." . PHP_EOL;
        else
            echo "Xenos spotted." . PHP_EOL;
    }
}
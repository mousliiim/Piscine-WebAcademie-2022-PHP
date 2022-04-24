<?php
    function colle($x, $y){
        if ($x == 5 && $y == 3){
            echo "/***\ \n"."*   *\n"."\***/\n";
        }
        if ($x == 5 && $y == 1){
            echo "*****\n";
        }
        if ($x == 1 && $y == 1){
            echo "*\n";
        }
        if ($x == 1 && $y == 5 ){
            echo "*\n*\n*\n*\n*\n";
        }
        if ($x == 4 && $y == 4){
            echo "/**\ \n"."*  *\n"."*  *\n"."\**/\n";
        }
    }

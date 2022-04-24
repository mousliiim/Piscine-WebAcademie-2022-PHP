<?php
function str_to_wordtab($str = NULL, $delim = NULL){
        if (is_string($str) == false || is_string($delim) == false){
               return NULL;
        }
        else{
               return (explode($delim, $str));
        }
}


<?php
function clear_and_replace($string, $word){

$clean = trim($string, " ");
return preg_replace("/".$word."/", "Pangolin", $clean, 2);

}

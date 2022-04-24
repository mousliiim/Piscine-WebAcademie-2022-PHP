<?php

function multiples($nb){
$limite=200000;
for($i=0;$nb*$i<$limite;$i++){
$multiple=$nb*$i;
echo $multiple."\n";
}
}

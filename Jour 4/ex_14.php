<?php
function goto_is_evil(){
$i = 1;
a:
if($i<=42){
echo "wac\n";
$i++;
goto a;
}
}

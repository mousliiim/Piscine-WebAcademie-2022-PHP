<?php
$arra = (["un", "deux", "trois"]);
function get_array_key($arr,$value){
foreach($arr as $key => $valeur){
if($valeur == $value){
echo $key;
}
}
}

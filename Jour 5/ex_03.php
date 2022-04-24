<?php
function my_add_to_cookie($key, $value){
$tmp = $value. "toto";
setcookie($key, $tmp);
}

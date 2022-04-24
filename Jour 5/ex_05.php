<?php
function my_add_to_session($key, $value){
$_SESSION[$key] = ($value .="titi");
}

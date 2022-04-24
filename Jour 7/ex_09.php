<?php
function is_prime($n = NULL){
        if(is_int($n) == false){
	return NULL;
	}
	else if ($n === 1 || $n === 0)
	return false;
	for($i = 2; $i < $n; $i++){
	if ($n % $i == 0){
	return false;
	}
	}
	return true;
}

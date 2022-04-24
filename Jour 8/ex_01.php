<?php
function which_is_longer($str1 = NULL, $str2= NULL){
		if(is_string($str1) == false || is_string($str2) == false){
		return -1;
	}
		$a = strlen($str1);
		$b = strlen($str2);
		if($a >=  $b){
			return $a;
		}
		else{
			return $b;
		}
	}

<?php
function str_lower_epur($str = NULL){

	if(is_string($str)== false)
	return NULL;
	else{
	$str = strtolower(trim(preg_replace("/\s+/", " ", $str)));
	$str = explode(" ", $str);
	foreach($str as $key => $value){
		$str[$key] = strrev($str[$key]);
		$str[$key] = ucfirst($str[$key]);
		$str[$key] = strrev($str[$key]);
}
}
	return implode(" ",$str);
}


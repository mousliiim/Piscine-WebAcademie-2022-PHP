<?php

function my_generate_file($value){
$folder = fopen($value.".txt","w");
	if ($folder){
		return true;
	}
	else{
		return false;
	}
}

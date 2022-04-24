<?php

function my_get_weird_info(){
	$start = 0;
	foreach($_GET as $key => $value){
	if($start < $_GET['nbr_elem']){
	echo "$value\n";
	$start++;
	}
	}
}

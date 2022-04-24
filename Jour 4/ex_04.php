<?php
function print_until($value){
	$i = 0;
	if ($value < 0){
	echo "Boulet !\n";
	return false;
	}
	else {
	while ($i <= $value){
	echo $i . "\n";
	$i++;
}
	return true;
	}
}

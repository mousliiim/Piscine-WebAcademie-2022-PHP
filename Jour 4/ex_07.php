<?php
function aff_array($tab)
{
	$nb = 0;
	foreach ($tab as $key => $value){
		echo $value . "\n";
		$nb++;
	}
	return $nb;
}

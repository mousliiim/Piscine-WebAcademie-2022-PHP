<?php
    $i=1;
	if($argc >= 1){
		while($i < $argc){
		echo sha1($argv[$i]) . PHP_EOL;
		$i++;
	}
}
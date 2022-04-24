<?php
function get_execution_time(){
	$temps = microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'];
	$temps = number_format($temps,7);
	$temps = floatval($temps);
		return $temps;
}

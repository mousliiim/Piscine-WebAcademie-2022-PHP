<?php
function get_args() {
	$arr = [];
	$number = func_num_args();
	$put = func_get_args();
	for ($i = 0; $i < $number; $i++){
	$arr [$i] = $put[$i];
}
	return $arr;
}

function get_last_arg() {
	$arr = [];
	$number = func_num_args();
	$put = func_get_args();
	for ($i = 0; $i < $number; $i++)
	{
		$arr[$i] = $put[$i];
}
	return end($arr);
}

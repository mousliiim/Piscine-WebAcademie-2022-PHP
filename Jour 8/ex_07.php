<?php
function count_char($str){
	$channel = str_replace(' ', "", $str);
	$arr = [];
	foreach(count_chars($channel, 1) as $i => $val){
	$arr += [ chr($i)=> $val];
}
		return $arr;
}

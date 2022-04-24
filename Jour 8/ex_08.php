<?php
function get_median($arr) {
    sort($arr);
   	 $count = count($arr);
   	 $middleval = floor(($count-1)/2);
    	 if ($count % 2) {
       	 $median = $arr[$middleval];
    } 	
	else {
        $low = $arr[$middleval];
        $high = $arr[$middleval+1];
        $median = (($low+$high)/2);
    }
    return $median;
}

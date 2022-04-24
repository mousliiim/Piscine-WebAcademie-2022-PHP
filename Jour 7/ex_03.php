<?php

function my_pow($a = NULL, $b = NULL){
        	$power = $a;
        	if ($b === 0 && (is_int($a) == true && is_int($b) == true))
                	return 1;
        	elseif ($b < 0  && (is_int($a) == false && is_int($b) == false))
                	return NULL;
        	else
        	{
                for ($i = 1; $i < $b; $i++)
                $power = $power * $a;
                	return $power;
        	}
}

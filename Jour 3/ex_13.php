<?php
function my_swap_vars(&$a, &$b)
	{
	$swap = $b;
	$b = $a;
	$a = $swap;
	}

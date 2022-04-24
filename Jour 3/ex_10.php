<?php
function print_calls()
	{
	static $call;
	$call++;
	echo $call;
	}

<?php
function print_array_with_key($tab)
{
	foreach($tab as $key =>  $value )
	{
		echo $key . " : " . $value . "\n";
	}
}
?>

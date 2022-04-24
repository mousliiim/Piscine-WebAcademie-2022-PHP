<?php
function break_cat()

{
	while(true)
	{
		$line = fgets(STDIN);
		echo "$line";
		if ($line == "EOF\n")
		{
        		break;
		}
	}
}

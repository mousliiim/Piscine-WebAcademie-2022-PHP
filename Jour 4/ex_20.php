<?php
function continue_cat()

{
	while(true)
	{
		$line = fgets(STDIN);
		echo "$line";
		if ($line == "0\n")
		{
        		continue;

		}
		elseif ($line == "EOF\n")
			{ exit()
			}
	}
}

<?php
function display_names(...$params)
{
     $arr = [];
     $arr[0] = basename(__FILE__);
     $arr[3] = func_num_args();
    	if ($arr[3] % 2 == 0)
            $arr[4] = 1;
        else
            $arr[4] = 0;
        		return($arr);
}

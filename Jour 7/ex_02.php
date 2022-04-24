<?php
function my_facto_rec($n = null){
        if (is_int($n) == false || $n < 0)
                return NULL;
	else{
        if ($n == 0)
                return 1;
	else
                return ($n * my_facto_rec($n - 1));
	    }
}

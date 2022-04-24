<?php
function my_facto($n = null){
        $fact = 1;
        if (is_int($n) == false || $n < 0)
                return NULL;

        if ($n === 0)
                return 1;
        else if ($n > 0 && is_int($n) == true){
                for ($i = 1; $i <= $n; $i++)
                        $fact = $fact * $i;
                return $fact;
        }
}

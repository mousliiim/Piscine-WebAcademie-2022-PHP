<?php

function sum_it($n = NULL, $iteration = NULL){
        $a = $n;
        if (is_int($n) == false || is_int($iteration) == false)
                return NULL;
        else
        {
                if ($iteration >= 0)
                {
                        for ($i = 0; $i < $iteration; $i++)
                                $a = $a + $iteration - $i;
                }
                else
                {
                        for ($i = 0; $i < -$iteration; $i++)
                                $a = $a + $iteration + $i;
                }
                return $a;
        }
}

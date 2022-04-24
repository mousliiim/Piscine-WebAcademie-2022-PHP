<?php
function check_types(array $types){
        foreach ($types as $key => $value)
        {
                foreach($values $int)
                {
                        if ($key != gettype($int))
                                return false;
                }
                return true;
        }
}

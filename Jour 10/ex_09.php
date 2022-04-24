<?php

function objects_comparison($object1, $object2)
{
     if ($object1 == $object2 && $object1 !== $object2)
        echo "Objects are equal.".PHP_EOL;
     else if ($object1 === $object2)
        echo "Objects are the same.".PHP_EOL;
     else
        echo PHP_EOL;
}
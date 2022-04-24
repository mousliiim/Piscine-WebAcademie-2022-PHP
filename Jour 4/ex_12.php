<?php
function is_similar($a, $b){
        if ($a === $b){
	echo "Same type and value.\n";
}
	else if($a == $b){
	echo "Same value.\n";
}
else if(gettype($a) == gettype($b)){
echo "Same type.\n";
}
}

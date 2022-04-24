<?php
function my_sort_files(&$tab){
        sort($tab);
        foreach($tab as $value){
		echo "$value\n";
}
}

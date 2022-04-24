<?php
function my_cat_files(...$path){
    $compteur =0;
    $result ="";
    foreach ($path as $thefile ) {
    if (!file_exists($thefile)) {
            continue;
     }
     $file = fopen("$thefile","r");
     if ($compteur < func_numargs() -1) {
         $result .= fread($file,filesize($thefile)) . "__";

    }else {
         $result .= fread($file,filesize($thefile));
     }
         $compteur++;

   }
   return $result;
fclose($file);
}

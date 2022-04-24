<?php

function my_mail($mail){
       			 if(is_string($mail) == true) {
               		 if(strrpos($mail, ".") != false)
                       		 $mail = substr($mail, 0, strrpos($mail, "."));
               		 if(strpos($mail, "@") != false)
                       		 $mail = substr($mail, strpos($mail, "@") + 1);
                	 echo $mail.PHP_EOL;
       			 }
}

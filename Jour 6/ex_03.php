<?php
function write_into_my_file($str, $file, $append = false){
        	if($append == true)
        	{
                file_put_contents($file,$str,FILE_APPEND);
                return true;
        	}
        	else
        	{
                file_put_contents($file,$str);
                return true;
        	}

		}

<?php
function check_email()
{
     		$rgx = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,10})$/";
     		foreach ($_POST as $key => $value)
        {
                if ($key == "email" && preg_match($rgx, $value))
                        	echo "courriel valide\n";
               		 else
                        	echo "courriel invalide\n";
        }
}

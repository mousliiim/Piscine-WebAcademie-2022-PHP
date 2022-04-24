<?php

function rev_epur_str($str = FALSE)
{
	if(!is_string($str))
	{
		return FALSE;
	}
	else
	{
		$str = trim($str);
		$str = preg_replace('/\s+/' , " ", $str);
		$chaine = explode(" ", $str);
		$chaine = array_reverse($chaine);
		$chaine = implode(' ', $chaine);
		return $chaine;
	}
}
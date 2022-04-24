<?php
function calc(string $operation, int $nb1, int $nb2)
{
switch($operation)
	{
	case "%";
	return $nb1 % $nb2;

	case "*";
	return $nb1 * $nb2;

	case "-";
	return $nb1 - $nb2;

	case "/";
	return $nb1 / $nb2;

	case "+";
	return $nb1 + $nb2;
	}
}

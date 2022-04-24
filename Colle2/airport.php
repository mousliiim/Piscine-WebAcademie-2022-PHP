<?php

function led($string, $i)
{
	$text = $string;
    
    while(true){
    for($inc = 0; $inc < $i; $inc++){
        echo substr($text, $inc , 30) . PHP_EOL;
        usleep(500000);
        @system('clear');
    }
}
}

    led("Le but de notre vie est d’etre heureux.", 30);

    // Exo a moitié seulement car ne revient pas de la bonne façon

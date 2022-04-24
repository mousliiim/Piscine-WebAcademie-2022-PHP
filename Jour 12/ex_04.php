<?php

function resum_join_str($chaine_1 = FALSE , $chaine_2 = FALSE ){
    if(!is_string($chaine_1) || !is_string($chaine_2)){
        return FALSE;
    }
        // Mes Position ou les point vont s'afficher avec une condition et une boucle.
    $pointeur1 ="";
    $pointeur2="";

        // Pour pouvoir calculer combien de point mettre avec une soustraction de la longeur de la chaine
    $compteur1 = strlen($chaine_1);
    $compteur2 = strlen($chaine_2);

        // Compteur 1 de la chaine 1
    if($compteur1 < 12){
        $chaine_1 = substr($chaine_1,0,12);
        for($i = 0;$i < 12 - $compteur1;$i++){
            $pointeur1 .= ".";
        }
    }
        // Compteur 2 de la chaine 2
    if($compteur2 < 8){
        $chaine_2 = substr($chaine_2,-8,8);
        for($j = 0;$j < 8 - $compteur2;$j++){
            $pointeur2 .= ".";
        }
    }

    if($compteur1 >= 12){
        $chaine_1 = substr($chaine_1,0,12);

    }
    if($compteur2 >= 8){
        $chaine_2 = substr($chaine_2,-8,8);
    }

    return $chaine_1.$pointeur1.$chaine_2.$pointeur2;

}
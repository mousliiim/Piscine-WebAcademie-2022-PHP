<?php

function unZip($archive){ //Fonction qui lit l'archive et reécrit les dossiers et fichiers

    $handleReader = fopen($archive, "r");//ouvre l'archive en mode read
    $reader = fread($handleReader, filesize($archive));//lit l'archive
    $jsonArr = json_decode($reader);//decode le contenu l'archive et le stock dans un tableau

    foreach($jsonArr as $files){//boucle qui récupère les fichiers

        foreach($files as $content){//boucle qui récupère le contenu des fichier
            
            $fileName = $files->{'name'};
            $path = $files->{'path'};
            $fileContent = $files->{'content'};


            
            if(file_exists($path)){//si le chemin d'origine du fichier existe
                $handleWriter = fopen("$path/$fileName", "w");
            }
            else {//si il n'existe pas
                mkdir($path);
                echo "\e[0;32m Création du dossier : $path \e[0m\n";
                $handleWriter = fopen("$path/$fileName", "w");
            }
            
            $fileWriter = fwrite($handleWriter, $fileContent);
            fclose($handleWriter);

        }

        echo "\e[0;32m Ecriture du fichier : $fileName \e[0m\n";

    }

}

if(isset($argv[1])){//si l'argument numéro 1 existe

    $fileToUnzip = $argv[1];
    unZip($fileToUnzip);

}
else{//si il n'existe pas

    echo "\n\e[0;31m Il manque un argument. \e[0m\n\n";
    echo "\e[0;31m Utilisation => php my_untar.php \"nom de l'archive\" \e[0m\n\n";

}

?>
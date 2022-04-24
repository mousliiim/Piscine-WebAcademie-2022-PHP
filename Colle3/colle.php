<?php
class C3PO extends Robot{
    protected static $numeroDeSerie;
    private $type;
    private $nom;

    function __construct($nom, $type = "droide de protocole"){
            self::$numeroDeSerie++;
            $this->nom = $nom;
            $this->type = $type;
            echo "Je suis le droïde de protocole numéros " . self::$numeroDeSerie . ", " . "enchanté de vous rencontrer !" . PHP_EOL;
    }

    public function getName(){
        return $this->nom;
}
    public function setName($nom){
        $this->nom = $nom;
    }

    public function getType(){
        return $this->type;
    }

    public function setType($type){
            $this->type = $type;
    }

    public function dire($str){
        echo "C3PO no " . self::$numeroDeSerie . " : " . "$str" . PHP_EOL;
    }

    public function marcher(){
        echo "Je me mets en route, inutile d'insister." . PHP_EOL;
    }

    public function initierProtocole(){
        echo "En attente d'interaction utilisateur : " . PHP_EOL;
        $this->initierProtocolerl();
    }

    public function initierProtocolerl(){
        $a = readline();
        do{
            if(empty($a)){
                echo "Veuillez m'indiquer une action !" . PHP_EOL;
                $this->initierProtocolerl();
            }
            elseif($a == "marcher"){
                echo $this->marcher();
                $this->initierProtocolerl();
            }
            elseif($a == "dire"){
                echo $this->dire($str);
                $this->initierProtocolerl();
            }
            elseif($a == "repos"){
                echo "Fin du protocole" . PHP_EOL;
                die;
            }
            }
    while($a != "repos");
}
}
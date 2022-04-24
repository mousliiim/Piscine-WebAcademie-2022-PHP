<?php
trait Singer {
    function sing_a_song() {
        $string = "Trololololololol";
        echo $string . PHP_EOL;
        $string = str_replace("o", "a", $string);
        echo $string . PHP_EOL;
        $string = str_replace("a", "i", $string);
        echo $string . PHP_EOL;
    }
}

interface GoodManners{
    const END_WORDS = ", dirais-je.";
    public function say_please();
    public function say_thanks();
    public function say_sorry($nom);
}
abstract class Warrior{

    public function attack(){
        echo "I'll kill you, poor noob !" . PHP_EOL;
    }
    abstract public function represent();
    abstract public function shout();
}

class Booba extends Warrior implements GoodManners{

    use Singer;
    
    public function represent(){
        echo "92" . PHP_EOL;
    }

    public function shout(){
        echo "Bah bien Morray !";
    }

    public function say_please(){
        echo "S'il-te-plait".GoodManners::END_WORDS . PHP_EOL;
    }

    public function say_thanks(){
        echo "Merci".GoodManners::END_WORDS . PHP_EOL;
    }

    public function say_sorry($nom){
        echo "Mille excuses, $nom".GoodManners::END_WORDS . PHP_EOL;
    }
}

class LaFouine extends Warrior{

    public function represent(){
        echo "78" . PHP_EOL;
    }

    public function shout(){
        echo "Je suis proprietaire !";
    }
}
<?php

class Pangolin{

    public $friends = array();
    public $skills = Skill;

    function __construct(array $friends, Skill $skills){
        if(is_array($friends) | is_null($friends))
        $this->friends = $friends;
        if(is_a($skills, Skill))
        $this->skills = $skills;
    }
}

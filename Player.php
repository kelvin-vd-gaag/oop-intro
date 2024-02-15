<?php

class Player{
    protected $name;
    protected $level;
    protected $health;
    protected $stamina;

    public function set_name($tafel){
        $this->name = $tafel;
    }

    public function get_name(){
        return $this->name;
    }
}

$speler = new Player();
$speler->set_name("Link");
$speler->name = 435678900876543;

echo $speler->get_name();
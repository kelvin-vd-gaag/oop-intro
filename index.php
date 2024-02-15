<?php

class Fruit{
    public $naam;
    protected $prijs;

    //SETTER
    public function stel_prijs_in($price){
        if ($price > 0 && $price < 15.5){
            $this->prijs = $price;
        }
    }

    public function get_prijs(){
        return $this->prijs;
    }
}

$banaan = new Fruit();
$banaan->naam = "Banaan";
$banaan->stel_prijs_in(10.0);

echo $banaan->prijs;




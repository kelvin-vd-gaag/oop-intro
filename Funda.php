<?php

class House{
    protected $price;
    protected $square_meters;

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getSquareMeters()
    {
        return $this->square_meters;
    }

    /**
     * @param mixed $square_meters
     */
    public function setSquareMeters($square_meters)
    {
        $this->square_meters = $square_meters;
    }

    public function calculate_price_m2(){
        return ceil($this->price / $this->square_meters);
    }
}

$huis = new House();
$huis->setPrice(1000000);
$huis->setSquareMeters(30);
echo $huis->calculate_price_m2();
//$huis_2 = new House();
//$huis_2->setPrice(50000);
//$huis_2->setSquareMeters(100);


//echo $huis->getPrice() / $huis->getSquareMeters();
//echo $huis_2->getPrice() / $huis_2->getSquareMeters();

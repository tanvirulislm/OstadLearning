<?php 
class MileageCalculator{
    public $pricePerLitre;
    public $distance;
    public $totalFuelPrice;

    function calculateKMPL(){
        $totalFuel = $this->totalFuelPrice / $this->pricePerLitre;
        $mileage = $this->distance/$totalFuel;
        echo "The mileage of the vehicle is {$mileage} kmpl.\n";
    }
}

$motorcycle = new MileageCalculator();
$motorcycle->pricePerLitre = 122;
$motorcycle->distance = 100;
$motorcycle->totalFuelPrice = 500;
$motorcycle->calculateKMPL();

$car = new MileageCalculator();
$car->pricePerLitre = 122;
$car->distance = 200;
$car->totalFuelPrice = 2000;
$car->calculateKMPL();


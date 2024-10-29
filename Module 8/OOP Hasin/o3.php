<?php 
class MileageCalculator{
    public $pricePerLitre;
    public $distance;
    public $totalFuelPrice;

    public function __construct($pricePerLitre, $distance, $totalFuelPrice){
        $this->pricePerLitre = $pricePerLitre;
        $this->distance = $distance;
        $this->totalFuelPrice = $totalFuelPrice;
    }

    function calculateKMPL(){
        $totalFuel = $this->totalFuelPrice / $this->pricePerLitre;
        $mileage = $this->distance/$totalFuel;
        echo "The mileage of the vehicle is {$mileage} kmpl.\n";
    }
}

$motorcycle = new MileageCalculator(122,100,400); //instantiate
$motorcycle->calculateKMPL();

$car = new MileageCalculator(122,100,2000); //instantiate
$car->calculateKMPL();

$hybridCar = new MileageCalculator(122,100,800); //instantiate
$hybridCar->calculateKMPL();


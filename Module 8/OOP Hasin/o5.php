<?php 
class MileageCalculator{
   
    public function __construct(public $pricePerLitre, public $distance, public $totalFuelPrice){}

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


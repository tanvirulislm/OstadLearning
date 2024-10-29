<?php 
class PetrolMileageCalculator{
    public $pricePerLitre = 122;
    public $distance;
    public $totalFuelPrice;

    public function __construct( $distance, $totalFuelPrice){
        $this->distance = $distance;
        $this->totalFuelPrice = $totalFuelPrice;
    }

    function calculateKMPL(){
        $totalFuel = $this->totalFuelPrice / $this->pricePerLitre;
        $mileage = $this->distance/$totalFuel;
        echo "The mileage of the vehicle is {$mileage} kmpl and it runs on petrol.\n";
    }
}

class OctaneMileageCalculator{
    public $pricePerLitre = 130;
    public $distance;
    public $totalFuelPrice;

    public function __construct( $distance, $totalFuelPrice){
        $this->distance = $distance;
        $this->totalFuelPrice = $totalFuelPrice;
    }

    function calculateKMPL(){
        $totalFuel = $this->totalFuelPrice / $this->pricePerLitre;
        $mileage = $this->distance/$totalFuel;
        echo "The mileage of the vehicle is {$mileage} kmpl and it runs on octane.\n";
    }
}


$car = new PetrolMileageCalculator(100, 2000); //instantiate
$car->calculateKMPL();

$motorcycle = new OctaneMileageCalculator(100, 300); //instantiate
$motorcycle->calculateKMPL();


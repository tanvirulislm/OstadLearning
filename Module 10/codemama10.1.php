<?php
// fscanf(STDIN, "%s %s %s", $wheels, $carBodies, $figures);
function calculateToyCars($wheels, $carBodies, $figures){
    $carsFromWheels = $wheels / 4;
    $carsFromBodies = $carBodies / 1;
    $carsFromFigures = $figures / 2;

    $maxCompleteCars = min($carsFromWheels, $carsFromBodies, $carsFromFigures);

    return floor($maxCompleteCars);
}

echo calculateToyCars();
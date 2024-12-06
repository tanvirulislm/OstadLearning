<?php
// Input the size of the array
$N = intval(trim(fgets(STDIN)));

// Input the array elements as a single line and split into an array
$M = explode(" ", trim(fgets(STDIN)));

// Sort the array by string length using a custom comparison function
usort($M, function($a, $b) {
    return strlen($a) - strlen($b);
});

// Print the sorted array
echo implode(" ", $M) . "\n";    
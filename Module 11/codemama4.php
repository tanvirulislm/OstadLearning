<?php



// Read a float number from input
// fscanf(STDIN, "%f", $celsius);

// Convert Celsius to Fahrenheit
$fahrenheit = $celsius * (9 / 5) + 32;

// Output the Fahrenheit value with 2 decimal points
echo "The temperature in Fahrenheit is: " . number_format($fahrenheit, 2);


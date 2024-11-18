<?php
    # Write your PHP code from here
  fscanf(STDIN, "%f %f %f", $num1, $num2, $num3);

// Calculate the average
$average = ($num1 + $num2 + $num3) / 3;

// Output the average with 2 decimal places
echo "Average: " . number_format($average, 2);
    
?>
<?php

function calculateSquareRoot($n) {
    if ($n == 0) {
        return 0; // Special case for 0
    }
    
    $low = 0;
    $high = $n;
    $result = 0;

    while ($low <= $high) {
        $mid = intdiv($low + $high, 2); // Calculate middle element
        
        // If mid^2 is less than or equal to n, it's a potential candidate
        if ($mid * $mid <= $n) {
            $result = $mid; // Save the mid as the potential answer
            $low = $mid + 1; // Search in the right half
        } else {
            $high = $mid - 1; // Search in the left half
        }
    }
    
    return $result;
}

// Input handling
$n = intval(trim(fgets(STDIN)));  // Input number

// Calculate and output the integer square root
echo calculateSquareRoot($n) . "\n";
?>

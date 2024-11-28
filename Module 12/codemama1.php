<?php 
function findMinInRotatedSortedArray($arr) {
    $n = count($arr);
    
    if ($n == 0) {
        return null; // If array is empty
    }
    
    $left = 0;
    $right = $n - 1;
    
    while ($left < $right) {
        $mid = intdiv($left + $right, 2); // Efficient integer division

        // If the middle element is greater than the right element, 
        // the minimum is in the right half.
        if ($arr[$mid] > $arr[$right]) {
            $left = $mid + 1;
        } else {
            // If the middle element is less or equal to the right element, 
            // the minimum could be at mid or to the left of mid.
            $right = $mid;
        }
    }
    
    // After the loop, left will point to the minimum element
    return $arr[$left];
}

// Input handling
$n = intval(trim(fgets(STDIN)));  // Size of array

if ($n > 0) {
    $arr = array_map('intval', explode(' ', trim(fgets(STDIN))));  // Elements of the array

    // Find and echo the minimum element
    echo findMinInRotatedSortedArray($arr) . "\n";
}

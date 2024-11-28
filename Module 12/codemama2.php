<?php

function findTargetInRotatedArray($arr, $target) {
    $left = 0;
    $right = count($arr) - 1;

    while ($left <= $right) {
        $mid = intdiv($left + $right, 2);

        // If the target is found, return the index
        if ($arr[$mid] == $target) {
            return $mid;
        }

        // Check which half is sorted
        if ($arr[$left] <= $arr[$mid]) {
            // Left half is sorted
            if ($target >= $arr[$left] && $target < $arr[$mid]) {
                $right = $mid - 1;  // Search in the left half
            } else {
                $left = $mid + 1;   // Search in the right half
            }
        } else {
            // Right half is sorted
            if ($target > $arr[$mid] && $target <= $arr[$right]) {
                $left = $mid + 1;   // Search in the right half
            } else {
                $right = $mid - 1;  // Search in the left half
            }
        }
    }

    // If we reach here, the target is not found
    return "Element not found";
}

// Input handling
$n = intval(trim(fgets(STDIN)));  // Size of the array

if ($n > 0) {
    // Read the array elements
    $arr = array_map('intval', explode(' ', trim(fgets(STDIN))));  // Elements of the array

    // Read the target value
    $target = intval(trim(fgets(STDIN)));  // Target value

    // Find and print the index of the target
    echo findTargetInRotatedArray($arr, $target) . "\n";
} else {
    echo "Array size should be greater than 0.\n";
}

?>

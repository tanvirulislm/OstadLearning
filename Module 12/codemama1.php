<?php

$input = trim(fgets(STDIN));
$arr = explode(" ", $input);
$n = count($arr);

$left = 0;
$right = $n - 1;
$min = PHP_INT_MAX;

while ($left <= $right) {
    // If array is already sorted
    if ($arr[$left] <= $arr[$right]) {
        $min = min($min, $arr[$left]);
        break;
    }
    
    $mid = $left + floor(($right - $left) / 2);
    $min = min($min, $arr[$mid]);
    
    // Check which half is sorted and contains minimum
    if ($arr[$left] <= $arr[$mid]) {
        // Left half is sorted
        // Compare with first element
        $min = min($min, $arr[$left]);
        $left = $mid + 1;
    } else {
        // Right half is sorted
        $min = min($min, $arr[$mid + 1]);
        $right = $mid;
    }
}

echo $min;


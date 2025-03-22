<?php

function findTripletSum($arr, $p) {
    $n = count($arr);
    sort($arr); // Sort the array to efficiently find triplets

    for ($i = 0; $i < $n - 2; $i++) {
        $left = $i + 1;
        $right = $n - 1;

        while ($left < $right) {
            $sum = $arr[$i] + $arr[$left] + $arr[$right];

            if ($sum == $p) {
                echo $arr[$i] . " " . $arr[$left] . " " . $arr[$right] . PHP_EOL;
                return; // Found a triplet, so we can return
            } elseif ($sum < $p) {
                $left++;
            } else {
                $right--;
            }
        }
    }
    // If no triplet is found, you can optionally print a message.
    // echo "No triplet found." . PHP_EOL;

}

// Read input from stdin
$n = intval(trim(fgets(STDIN)));
$arr = array_map('intval', explode(' ', trim(fgets(STDIN))));
$p = intval(trim(fgets(STDIN)));

// Find and print the triplet
findTripletSum($arr, $p);

?>
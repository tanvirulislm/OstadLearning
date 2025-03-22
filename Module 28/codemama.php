<?php

function countWaysToClimb($n) {
    if ($n <= 1) {
        return 1;
    }

    $dp = array_fill(0, $n + 1, 0);
    $dp[0] = 1;
    $dp[1] = 1;

    for ($i = 2; $i <= $n; $i++) {
        $dp[$i] = $dp[$i - 1] + $dp[$i - 2];
    }

    return $dp[$n];
}

// Read input from stdin
$n = intval(trim(fgets(STDIN)));

// Calculate and print the result
$result = countWaysToClimb($n);
echo $result . PHP_EOL;

?>
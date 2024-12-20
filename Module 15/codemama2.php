<?php

$line1 = trim(fgets(STDIN));
$line2 = trim(fgets(STDIN));

$n = int($line1);

$numbers = explode(" ", $line2);

$posCount = 0;
$negCount = 0;

for($i = 0; $i < $n; $i++) {
    if($numbers[$i] > 0) {
        $posCount++;
    } else if($numbers[$i] < 0) {
        $negCount++;
    }
}

print $posCount > $negCount ? "Positivity" : "Negativity";


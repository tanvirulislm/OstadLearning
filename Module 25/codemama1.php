<?php
function isRepdigit($N) {
    if ($N < 0) return "false";
    
    $digits = str_split((string) $N);
    return count(array_unique($digits)) === 1 ? "true" : "false";
}


$N = trim(fgets(STDIN));

echo isRepdigit($N) . "\n";
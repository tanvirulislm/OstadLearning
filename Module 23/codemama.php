<?php
// Get input from console
$s = trim(fgets(STDIN));

$maxLength = 0;
$charMap = [];
$left = 0;

for ($right = 0; $right < strlen($s); $right++) {
    $char = $s[$right];
    
    if (isset($charMap[$char]) && $charMap[$char] >= $left) {
        $left = $charMap[$char] + 1;
    }
    
    $charMap[$char] = $right;
    $maxLength = max($maxLength, $right - $left + 1);
}

echo $maxLength . "\n";


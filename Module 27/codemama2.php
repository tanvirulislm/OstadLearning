<?php
function removeKDigits($num, $k) {
    $stack = [];
    $length = strlen($num);
    
    if ($k >= $length) return "0";
    
    for ($i = 0; $i < $length; $i++) {
        while ($k > 0 && !empty($stack) && end($stack) > $num[$i]) {
            array_pop($stack);
            $k--;
        }
        $stack[] = $num[$i];
    }
    

    while ($k > 0) {
        array_pop($stack);
        $k--;
    }
    

    $result = ltrim(implode("", $stack), "0");
    return $result === "" ? "0" : $result;
}


fscanf(STDIN, "%d", $T);
while ($T--) {
    fscanf(STDIN, "%s %d", $N, $K);
    echo removeKDigits($N, $K) . "\n";
}
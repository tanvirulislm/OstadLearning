<?php

    function removeTrailingZeroes($S) {

    if (strpos($S, '.') !== false) {
        $S = rtrim($S, '0');
        $S = rtrim($S, '.'); 
    }
    return $S;
}


$S = trim(fgets(STDIN));

echo removeTrailingZeroes($S) . "\n";
?>
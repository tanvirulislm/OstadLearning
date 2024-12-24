<?php
function countLoneZeroes($number) {

    $numberString = (string)$number;


    $count = 0;


    $length = strlen($numberString);
    for ($i = 0; $i < $length; $i++) {

        if ($numberString[$i] === '0') {

            $isLoneZero = 
                ($i == 0 || $numberString[$i - 1] !== '0') && // No '0' before
                ($i == $length - 1 || $numberString[$i + 1] !== '0'); // No '0' after
            
            if ($isLoneZero) {
                $count++;
            }
        }
    }

    return $count;
}

$number = trim(fgets(STDIN));


echo countLoneZeroes($number);

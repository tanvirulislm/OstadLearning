<?php
// Prompt the user to enter the array elements
echo "Enter array elements separated by spaces: ";


$input = trim(fgets(STDIN));


$array = array_map('intval', explode(' ', $input));


$positiveSet = [];
$negativeSet = [];


foreach ($array as $value) {
    if ($value > 0) {
        
        $positiveSet[$value] = true;
    } elseif ($value < 0) {
       
        $negativeSet[$value] = true;
    }
 
}


$positiveCount = count($positiveSet);
$negativeCount = count($negativeSet);


if ($positiveCount > $negativeCount) {
    echo "positivity";
} else {
    echo "negativity";
}


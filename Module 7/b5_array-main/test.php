<?php 
$multiDimensionalArray = [
    [1,2,3],
    ['x','y','z'],
    [4,5,6]
];

$length = count($multiDimensionalArray);
for($i = 0; $i<$length; $i++){
    $item = $multiDimensionalArray[$i];
    $innerLength = count($item);
    for($j = 0; $j<$innerLength; $j++){
        echo $item[$j];
        echo PHP_EOL;
    }
}

forEach($multiDimensionalArray as $item){
    forEach($item as $innerItem){
        echo $innerItem;
        echo PHP_EOL;
    }
}
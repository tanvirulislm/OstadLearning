<?php 
$multidimensionalFruitsArray = [
    "berries" => [
        "strawberry",
        "blueberry",
        "blackberry"
    ],
    "citrus" => [
        "orange",
        "lemon",
        "lime"
    ],
    "tropical" => [
        "banana",
        "mango",
        "pineapple"
    ]
];

forEach($multidimensionalFruitsArray as $key => $value){
    echo $key."\n";
    forEach($value as $fruit){
        echo " - ".$fruit."\n";
    }
}
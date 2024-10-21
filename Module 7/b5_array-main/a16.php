<?php 
$fruits = [
    "mango"=>"আম",  //key => value
    "grape"=> "আঙ্গুর", 
    "apple"=> "আপেল"
];  //associative array //dictionary
$fruits["banana"] = "কলা";
print_r($fruits);

// $keys = array_keys($fruits);
// $values = array_values($fruits);

// print_r($keys);
// print_r($values);

$new_fruits = array_flip($fruits);
print_r($new_fruits);
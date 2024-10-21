<?php 
$fruits = ["mango", "grape", "apple"];
print_r($fruits);

// $fruits[]  = "banana";
// $fruits[]  = "pineapple";

// array_push($fruits, "orange"); //push    

$last_item = array_pop($fruits); //pop
array_pop($fruits);
array_pop($fruits);


print_r($fruits);
// echo $last_item;
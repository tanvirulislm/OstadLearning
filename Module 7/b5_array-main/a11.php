<?php 
$fruits = ["mango", "grape", "apple"];
$new_fruits = ["banana", "orange", "pineapple"];

$all_fruits = array_merge($fruits, $new_fruits);

print_r($all_fruits);

$class6 = ["A", "B", "C"];
$class7 = ["D", "E", "F", "C", "B"];

$common_items = array_intersect($class6, $class7);

print_r($common_items);
$class7_unique = array_diff($class7, $class6);
print_r($class7_unique);



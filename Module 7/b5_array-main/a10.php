<?php 
$fruits = [
    "mango"=>"আম",  //key => value
    "grape"=> "আঙ্গুর", 
    "apple"=> "আপেল"
];  //associative array //dictionary
$fruits["banana"] = "কলা";

unset($fruits["grape"]);

print_r($fruits);
<?php 
$fruits = ["mango", "grape", "apple", "banana", "orange", "pineapple"]; 

// array_splice($fruits,3,0,"watermelon"); //adding
array_splice($fruits,3,1); //removing

print_r($fruits);
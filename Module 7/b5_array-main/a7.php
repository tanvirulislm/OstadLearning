<?php 
$fruits = [
    "mango"=>"আম",  //key => value
    "grape"=> "আঙ্গুর", 
    "apple"=> "আপেল"
];  //associative array //dictionary
$fruits["banana"] = "কলা";

foreach($fruits as $key=>$value){
    echo "The translation of {$key} is {$value} \n";
}
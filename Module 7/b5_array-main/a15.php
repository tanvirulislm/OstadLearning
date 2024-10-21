<?php 
$fruits = [
    "mango"=>"আম",  //key => value
    "grape"=> "আঙ্গুর", 
    "apple"=> "আপেল"
];  //associative array //dictionary
$fruits["banana"] = "কলা";

echo array_key_exists("mango", $fruits) ;
echo array_search("আম", $fruits) ;


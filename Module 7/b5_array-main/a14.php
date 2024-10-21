<?php 
$fruits = ["banana", "mango", "grape", "apple", "orange", "pineapple", "watermelon"];

$position_of_banana = array_search("x", $fruits); //false


if($position_of_banana !== false){
    echo "X is found at position $position_of_banana";
}else{
    echo "X is not found";
}
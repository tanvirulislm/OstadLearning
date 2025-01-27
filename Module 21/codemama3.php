<?php

$number = 10;
$number = fgets(STDIN);

if($number > 0){
    echo "$number is a positive number.";
}else if($number < 0){
    echo "$number is a negative number.";
}else{
    echo "The number is zero.";
}
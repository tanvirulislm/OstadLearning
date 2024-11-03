<?php 
$fruit = $_COOKIE['fruit']??null;

if ($fruit){
    echo "Your fav fruit is {$fruit}";
}else{
    echo "No fav fruit set";
}
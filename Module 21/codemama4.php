<?php

$line = trim(fgets(STDIN));
list($num1, $num2) = explode(" ", $line);


echo "Before swapping: num1 = $num1, num2 = $num2" . PHP_EOL;


$temp = $num1;
$num1 = $num2;
$num2 = $temp;


echo "After swapping: num1 = $num1, num2 = $num2" . PHP_EOL;
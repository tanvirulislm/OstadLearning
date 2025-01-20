<?php
$input = trim(fgets(STDIN));
list($number1, $number2) = explode(' ', $input);
$remainder = $number1 % $number2;

echo $remainder;
    
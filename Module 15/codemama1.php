<?php
$num = 123;
fscanf(STDIN, "%d", $num);
$sum = array_sum(str_split($num));

if($sum % 2 == 0){
    echo "Even";
}else{
    echo "Odd";
}
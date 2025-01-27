<?php

$myYear = 2017;
$myYear = fgets(STDIN);

if($myYear % 4 == 0 && $myYear % 100 != 0 || $myYear % 400 == 0){
    echo "$myYear is a leap year.";
}else{
    echo "$myYear is not a leap year.";
}
<?php

$s = "Hello";

function removeDuplicate($line){
    $result = "";
    foreach(str_split($line) as $char){
        if(strpos($result, $char) === false){
            $result .= $char;
    }
    }
    return $result;
}

$output = removeDuplicate($s);
echo $output;
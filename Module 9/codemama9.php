<?php

function checkIften($a, $b){
    if($a == 10 || $b == 10 || ($a + $b) == 10){
        echo "True";
    }else{
        echo "False";
    }
}

// fscanf(STDIN, "%s %s", $a, $b);
checkIften($a, $b);
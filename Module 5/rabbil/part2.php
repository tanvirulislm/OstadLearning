<?php


 function countDown($x){

    if($x<=0){
        return $x;
    }

    echo $x ."<br/>";
    countDown($x-1);
 }


 countDown(5);
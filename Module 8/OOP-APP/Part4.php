<?php

// Father 
class Bangladesh{

    function Students(){
        echo " We Want Justice";
    }

    function DatabaseConnection(){
        $num1=10;
        $num2=20;
        echo $num1+$num2;
    }

}

// Son
class Dhaka extends Bangladesh {


    function DatabaseConnection(){
        $num1=10;
        $num2=20;
        $num3=40;
        echo $num1+$num2+$num3;
    }
}






$DhakaObj=new Dhaka();
$BangladeshObj=new Bangladesh();
$BangladeshObj->Students();


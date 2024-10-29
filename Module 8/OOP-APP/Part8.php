<?php

// Father 
class Bangladesh{

     public $name="OSTAD"; 

   final function Students(){
        echo " We Want Justice";
    }

}

// Son
class Dhaka extends Bangladesh {


    function Students(){
        echo " We Want Justice! We Want Justice ! We Want Justice !";
    }
}

$DhakaObj=new Dhaka();
$BangladeshObj=new Bangladesh();
$DhakaObj->Students();

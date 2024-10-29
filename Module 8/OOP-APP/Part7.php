<?php

// Father
 class Car{
     public  $color="Red ";
    function drive(){
     echo "Car is driving";
    }
 }
 


// Child 
 class Corolla extends Car{
   
 } 

 $CorollaObj= new Corolla();

 $CorollaObj->drive();
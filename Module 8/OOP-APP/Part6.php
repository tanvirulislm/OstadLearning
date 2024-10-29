<?php

// Father
class Car{
    public static $color="Red ";
    static function drive(){
     echo "Car is driving";
    }
 }
 


// Child 
 class Corolla extends Car{
   
 } 

 Corolla::drive();
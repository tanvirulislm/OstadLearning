<?php


class Car{
   public static $color="Red ";
   static function drive(){
    echo "Car is driving";
   }
}

echo Car::$color;
Car::drive();

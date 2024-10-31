<?php
class Car{
    public static  $color="Green";

    public static function drive(){
        echo " Car is Driving";
    }
}

echo Car::$color;
Car::drive();
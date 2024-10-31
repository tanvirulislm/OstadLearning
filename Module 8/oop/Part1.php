<?php

class Car{
    public  $color="Red";
    public function drive() {
        echo "Car is driving!";
    }

    public function __construct()
    {
        echo "I am construct!<br/>";
    }
}

$obj=new Car(); // We Create a Object Here
echo $obj->color;
$obj->drive();
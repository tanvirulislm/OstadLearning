<?php


class Car{
   public $color="Red ";

   public $cities=[1,2,3,4,5,6,7,8];
    
   public function drive(){
    echo "Car is driving";
   }
}


$CarObj=new Car(); 
echo $CarObj->color;
$CarObj->drive();
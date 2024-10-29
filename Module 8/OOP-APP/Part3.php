<?php


class Car{
   
   // Auto Exececution 
   // Can't Return 
   function __construct($a,$b,$c)
   {
      echo $a+$b+$c;
   }

   
}

new Car(10,40,50);

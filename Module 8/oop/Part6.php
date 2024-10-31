<?php

class Father {

    public $msg="Message ABC";

    final public function print100() {
        for($i=0;$i<=100;$i++){
         echo "$i <br/>";
        }
     }
}

class Son extends Father{
   

    //override
    public function print100() {
        for($i=0;$i<=10;$i++){
         echo "$i <br/>";
        }
     }

}


$objFather= new Father();
$objSon= new Son();


$objFather->print100();
$objSon->print100();




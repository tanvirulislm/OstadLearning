<?php


 class Father {

    public $msg="Message ABC";

    public function print100() {
        for($i=0;$i<=100;$i++){
         echo "$i <br/>";
        }
     }
}

class Son extends Father{
    // Empty

}

$objSon=new Son();
echo $objSon->msg;
$objSon->print100();


$objFather=new Father();
echo $objFather->msg;
$objFather->print100();

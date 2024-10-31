<?php

class Father {
    public $num1=100;
    public $num2=200;

    public function addTwo(){
       return $this->num1+$this->num2;
    }

}


class Son extends Father{

    public function MulTwo(){
        // আব্বা আব্বা 
        $abba=parent::addTwo();
        echo $abba*30;
        
    }

}

$obj = new Son();
$obj->MulTwo();
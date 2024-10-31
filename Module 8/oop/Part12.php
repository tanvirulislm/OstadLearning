<?php


class Gadha{

    // __call, __callStatic
    public function __call($name, $arguments)
    {
        print_r($arguments);
    }


}

$objGadha= new Gadha();
$objGadha->Rohima("A");
$objGadha->Jorina("A","B");
$objGadha->Katrina("A","B","D");
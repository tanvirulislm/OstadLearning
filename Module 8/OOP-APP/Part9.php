<?php

// Father 
class MyClass{

    // Can be accessed anywhere
    // public $color="Red";

    
    // Can be accessed only within this class
    // private $color="Red";



    //Can be accessed within this class and derived classes
    private $color="Red";
    function MyFun(){
        echo $this->color;
    }


}






// Son 
class YourClass extends MyClass{
    function YourFun(){
        echo $this->color;
    }

}



$Obj=new MyClass();
echo $Obj->color;
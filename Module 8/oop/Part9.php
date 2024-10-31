<?php

class Father {

    public function __construct()
    {
        echo "This is Father constructor";
    }
    
}

class Son extends Father{
   
    public function __construct()
    {
        echo "This is Son constructor";
    }
    
}
new Father();
new Son();




<?php

class Father {

    public function __construct()
    {
        echo "This is Father constructor";
    }
    
}

class Son extends Father{
   

    
}

new Son();




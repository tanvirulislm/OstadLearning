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
        // আব্বা ডাকে __construct কে 
        parent::__construct();
    }
    
}

new Son();




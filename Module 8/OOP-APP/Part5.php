<?php

// Father 
class Bangladesh{

    function __construct()
    {
        echo " I am constrctor from Bangladesh Parent Class";
    }
   
}



// Son
class Dhaka extends Bangladesh {
    function __construct()
    {
        parent::__construct();
        echo " I am constrctor from Dhaka Child Class";
    }

    
}

$DhakaObj=new Dhaka();
//$BangladeshObj=new Bangladesh();



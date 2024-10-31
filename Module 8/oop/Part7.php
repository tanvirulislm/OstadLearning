<?php

class Father {

    public static $msg="Message ABC";

    public function print100() {
        for($i=0;$i<=100;$i++){
         echo "$i <br/>";
        }
     }
}



class Son extends Father{
   

    
}





//echo Father::$msg;
echo Son::$msg;
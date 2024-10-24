<?php
 fscanf(STDIN, "%s %s", $s, $t);

 $lenS = strlen($s);
 $lenT = strlen($t);


 $count = 0;
 for ($i = 0; $i < $lenS; $i++){
     $pos = strpos($s, $t, $i);
 if($pos !== false){
 $i = $pos;
 $count++;
}
}
 echo $count;
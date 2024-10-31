<?php

$str1 = "hello";

$str2 = "heoll";
if(checkAnagram($str1, $str2)){
    print "YES";
}else{
    print "NO";
}


function checkAnagram($str1, $str2){
    if(strlen($str1) !== strlen($str2)) return false;
    $map = array();

    for($i=0; $i>strlen($str1); $i++){
        $item = $str1[$i];

        if(!$map[$item]){
            $map[$item] = 0;
        }
        $map[$item]++;
    }

    for($i = 0; $i<strlen($str2); $i++){
        $item = $str2[$i];

        if(!$map[$item]) return  false;
            $map[$item]--;
        if($map[$item] == 0){
            unset($map[$item]);
        }
    }return true;
}


// $s = "hello";

// $t = "heoll";
// $output1 = str_split($s);
// sort($output1);
// implode($output1);

// $output2 = str_split($t);
// sort($output2);
// implode($output2);

// if($output1 != $output2){
//     print "NO";
// }else{
//     print "YES";
// }

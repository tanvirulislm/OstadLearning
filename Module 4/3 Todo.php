<?php 
// sprintf()


// %s is used for inserting strings into the formatted output.
// %d or %i is used for inserting signed decimal integers into the formatted output.
// %f is used for inserting floating-point (decimal) numbers into the formatted output.
$fname="HASIN"; 
$lname="HAYDER";
$age=45;
$height=6.2;

$result=sprintf("Name:%s %s Age:%d Height:%f ft",$fname,$lname,$age,$height);
// (1) String formatting 
echo  $result




?>
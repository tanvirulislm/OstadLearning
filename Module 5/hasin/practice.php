<?php

// With the break statement we can stop the loop even if the condition is still true
$i = 1;
while ($i < 6) {
  if ($i == 3) break;
  echo $i;
  $i++;
}
echo "\n";

$i = 1;
while ($i < 6):
  echo $i;
  $i++;
endwhile;
echo "\n";

$g = 0;
while ($g < 95) {
  $g+=15;
  echo $g . "\n";
}
echo "\n";

for($n = 0; $n < 10; $n++)
echo "The Number is $n \n";


for($n =0; $n < 10; $n++){
    if($n == 5) continue;
    echo "The number is $n \n";
}
// Problem
for($o = 0; $o < 95; $o+=15){
    echo "My Number is $o \n";
}

$g = 0;
while ($g < 95) {
  $g+=15;
  echo $g . "\n";
}
echo "\n";


$veryOld = 0;
$old = 1;
$new = 1;

for($i =0; $i<10; $i++){
  echo $veryOld . " ";
  $old = $new;
  $new = $veryOld + $old;
  $veryOld = $old;

}

echo "\n";

for($i = 0; $i < 10; $i++){
  echo "5 x $i = " . 5*$i . "\n";
}
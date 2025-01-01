<?php
$n = intval(fgets(STDIN));

$sum = 0;
for($i=1; $i<=$n; $i++){
    $sum += $i;
}
echo $sum;
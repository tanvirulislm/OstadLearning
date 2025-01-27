<?php

$line1 = trim(fgets(STDIN));
list($x1, $y1) = explode(" ", $line1);

$line2 = trim(fgets(STDIN));
list($x2, $y2) = explode(" ", $line2);



$distance = sqrt(pow(($x2 - $x1), 2) + pow(($y2 - $y1), 2));



echo "Distance: " . number_format($distance, 2) . PHP_EOL;
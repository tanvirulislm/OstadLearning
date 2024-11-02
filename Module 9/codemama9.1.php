<?php

$a = 130;
// fscanf(STDIN, "%d", $a);
$hour = floor($a / 3600);
$minute = floor(($a / 60) % 60);


echo "$hour:$minute";
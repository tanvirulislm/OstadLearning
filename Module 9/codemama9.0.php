<?php

$a = "Tanvirul Islam";

// $a = trim(fgets(STDIN));


$words = explode(" ", $a);

$reverseName = array_reverse($words);

echo implode(", ", $reverseName);
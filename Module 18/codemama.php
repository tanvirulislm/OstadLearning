<?php

$string = trim(gets(STDIN));
$cleanString = preg_replace('/[^A-Za-z0-9 ]/', '', $string);

echo $cleanString;
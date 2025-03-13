<?php

$num = trim(fgets(STDIN));

if (!ctype_digit($num) || $num < 0) {
    echo "false\n";
} else {
    echo (count(array_unique(str_split($num))) === 1) ? "true\n" : "false\n";
}
<?php
    $input = trim(fgets(STDIN));
    list($number1, $number2) = explode(' ', $input);
    $quotient = intdiv($number1, $number2);
    print $quotient;

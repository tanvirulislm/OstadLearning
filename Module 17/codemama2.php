<?php

    $string = fgets(STDIN);
    $number = filter_var($string, FILTER_SANITIZE_NUMBER_INT);

    echo $number;
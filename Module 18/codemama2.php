<?php

function substitutionCipher($string, $shift) {
    $result = "";


    $shift = $shift % 26;


    for ($i = 0; $i < strlen($string); $i++) {
        $char = $string[$i];


        if (ctype_alpha($char)) {
            $asciiOffset = ctype_upper($char) ? ord('A') : ord('a');
            

            $newChar = chr((ord($char) - $asciiOffset + $shift + 26) % 26 + $asciiOffset);
            $result .= $newChar;
        } else {

            $result .= $char;
        }
    }

    return $result;
}


$input = trim(fgets(STDIN));


list($string, $shift) = explode(' ', $input);


$shift = (int)$shift;


$output = substitutionCipher($string, $shift);
echo  $output;
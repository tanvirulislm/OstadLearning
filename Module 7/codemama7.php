<?php
fscanf(STDIN, "%s %s", $s, $t);

function isRotation($s, $t) {
    if (strlen($s) == strlen($t) && strlen($s) > 0) {
        return strpos($s . $s, $t) !== false;
    }
    return false;
}

echo isRotation($s, $t) ? "True" : "False";

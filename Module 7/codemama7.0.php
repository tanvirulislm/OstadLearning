<?php
function isRotation($S, $T) {
    // Check if both strings are of equal length and not empty
    if (strlen($S) == strlen($T) && strlen($S) > 0) {
        // Concatenate S with itself and check if T is a substring
        return strpos($S . $S, $T) !== false;
    }
    return false;
}

// Read input
$input = trim(fgets(STDIN)); // For command-line input
list($S, $T) = explode(" ", $input);

// Output "True" or "False"
echo isRotation($S, $T) ? "True" : "False";
?>

<?php
function countOccurrences($S, $T) {
    // Use substr_count to count occurrences of T in S
    return substr_count($S, $T);
}

// Read input
$input = trim(fgets(STDIN)); // For command-line input
list($S, $T) = explode(" ", $input);

// Print the number of occurrences
echo countOccurrences($S, $T);
?>

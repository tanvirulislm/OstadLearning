<?php
// Function to count occurrences of a substring
function countOccurrences($string, $substring) {
    // Using substr_count function to count the occurrences of the substring
    return substr_count($string, $substring);
}

// Input
echo "Enter the main string and the substring (separated by space): ";
$input = trim(fgets(STDIN));
list($S, $T) = explode(" ", $input);

// Output the number of occurrences
echo countOccurrences($S, $T) . "\n";
?>

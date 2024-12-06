<?php
// Read input from the user
// echo "Enter string:\n";
$s = trim(fgets(STDIN));

// Check if the string is empty
if (strlen($s) === 0) {
    echo "\n"; // If empty string, output an empty line
    exit;
}

// Convert the string into an array of characters
$characters = str_split($s);

// Sort the array of characters lexicographically
sort($characters);

// Join the sorted characters back into a string
$lexicographicallyFirst = implode("", $characters);

// Print the result
echo $lexicographicallyFirst . "\n";
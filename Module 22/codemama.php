<?php
    # Write your PHP code from here
$str = trim(fgets(STDIN));

// Convert the string into an array of characters
$characters = str_split($str);

// Get all permutations using a built-in function
$permutations = [];
$length = count($characters);

function permute($arr, $start, $end, &$permutations) {
    if ($start == $end) {
        $permutations[] = implode('', $arr);
    } else {
        for ($i = $start; $i <= $end; $i++) {
            // Swap the elements
            list($arr[$start], $arr[$i]) = [$arr[$i], $arr[$start]];
            
            // Recursively permute the rest of the array
            permute($arr, $start + 1, $end, $permutations);
            
            // Backtrack to restore the original array
            list($arr[$start], $arr[$i]) = [$arr[$i], $arr[$start]];
        }
    }
}

// Call the permute function
permute($characters, 0, $length - 1, $permutations);

// Sort permutations alphabetically
sort($permutations);

// Output the permutations in one line
echo implode(' ', $permutations) . "\n";
?>

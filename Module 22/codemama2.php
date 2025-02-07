<?php
// Read input
$N = intval(trim(fgets(STDIN)));  // Read the integer N
$str = trim(fgets(STDIN));  // Read the string of length N

// Function to find the longest palindromic substring length
$maxLength = 1;  // Minimum palindrome length is 1

for ($i = 0; $i < $N; $i++) {
    // Check for odd-length palindromes (centered at i)
    $left = $i;
    $right = $i;
    while ($left >= 0 && $right < $N && $str[$left] == $str[$right]) {
        $maxLength = max($maxLength, $right - $left + 1);
        $left--;
        $right++;
    }

    // Check for even-length palindromes (centered between i and i+1)
    $left = $i;
    $right = $i + 1;
    while ($left >= 0 && $right < $N && $str[$left] == $str[$right]) {
        $maxLength = max($maxLength, $right - $left + 1);
        $left--;
        $right++;
    }
}

// Print the result
echo $maxLength . "\n";
?>

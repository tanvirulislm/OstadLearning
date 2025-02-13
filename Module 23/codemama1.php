<?php
function permute($str, $l, $r, &$result) {
    if ($l == $r) {
        $result[] = $str;
    } else {
        for ($i = $l; $i <= $r; $i++) {
            $str = swap($str, $l, $i);
            permute($str, $l + 1, $r, $result);
            $str = swap($str, $l, $i); // Backtrack
        }
    }
}

function swap($str, $i, $j) {
    $arr = str_split($str);
    $temp = $arr[$i];
    $arr[$i] = $arr[$j];
    $arr[$j] = $temp;
    return implode('', $arr);
}

// Get input from console
$s = trim(fgets(STDIN));
$result = [];
permute($s, 0, strlen($s) - 1, $result);
sort($result);
echo implode(" ", array_unique($result)) . "\n";
?>

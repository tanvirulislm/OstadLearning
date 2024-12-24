<?php
function findTripletSum($arr, $n, $P) {
    sort($arr);

    for ($i = 0; $i < $n - 2; $i++) {
        $left = $i + 1;
        $right = $n - 1;

        while ($left < $right) {
            $currentSum = $arr[$i] + $arr[$left] + $arr[$right];

            if ($currentSum == $P) {
                return [$arr[$i], $arr[$left], $arr[$right]];
            } elseif ($currentSum < $P) {
                $left++;
            } else {
                $right--;
            }
        }
    }


    return [];
}


$n = intval(trim(fgets(STDIN)));


$arr = array_map('intval', explode(' ', trim(fgets(STDIN))));


$P = intval(trim(fgets(STDIN)));


$result = findTripletSum($arr, $n, $P);


if (!empty($result)) {
    echo implode(' ', $result);
} else {
    echo "No found";
}
?>

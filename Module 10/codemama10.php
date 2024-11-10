<?php
// fscanf(STDIN, "%s %s", $amount, $discountAmount);
function calculateDiscount($amount, $discountPercentage){
    $discountAmount  = ($discountPercentage / 100) * $amount;
    $finalPrice = $amount - $discountAmount ;
    return number_format($finalPrice,2);
}

echo "Price: " .calculateDiscount(50, 50);
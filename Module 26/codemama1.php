<?php
    # Write your PHP code from here
    list($prob,$prize,$pay) = explode(" ", trim(fgets(STDIN)));

    $net_outcome = $prob * $prize - $pay;

    if($net_outcome > 0){
        echo "true";
    }else{
        echo "false";
    }
?>
<?php
    # Write your PHP code from here

    list($minutes, $fps) = explode(" ", trim(fgets(STDIN)));

    $total_second = $minutes * 60;

    $total_fps = $total_second * $fps;

    echo $total_fps;
    
?>
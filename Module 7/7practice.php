<?php 

$goodWork = "Students Arif, Barek, Abir, and Ratul collaborated on a project that showcased their skills. Arif contributed innovative design ideas, while Barek excelled in coding and implementation. Abir focused on testing and debugging, ensuring quality, and Ratul managed the project timeline, keeping everyone on track. Their teamwork resulted in outstanding work.";

$myLove = "Tanvir";

$isGetTanvir = strpos( $goodWork, $myLove );

if ($isGetTanvir !== false) {
    echo "$myLove is a good boy. He did some excelent work. So I love him";
}else{
    echo "$myLove is a bad boy. I hate him";
}
<?php 
// $username = "jimmy";
// $password = "123456";

$username = "janedoe";
$password = "password456";

$userData = file_get_contents("users.json");
$users = json_decode($userData, true);

foreach($users as $u=>$p){
    if($u==$username && $p==$password){
        echo "Login successful";
        exit;
    }
}
echo "Login failed";
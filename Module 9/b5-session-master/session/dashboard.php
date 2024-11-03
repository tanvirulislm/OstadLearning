<?php 
session_start();
if(!isset($_SESSION['_username'])){
    header("location:login.php");
}
$user = $_SESSION['_username'];
echo "Dashboard {$user}";
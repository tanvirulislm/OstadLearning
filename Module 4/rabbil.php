<?php 

// Good Moring And Good Evening rint
date_default_timezone_set("Asia/Dhaka");
$hour = date("H");

if($hour >=5 && $hour < 12){
    echo "Good Morning";
}elseif ($hour >=12 && $hour < 18){
    echo "Good Afternoon";
}else{
    echo "Good Night";
}
echo"\n";


// Positive and Negative Number Print
$myNumber = 10;

if($myNumber > 0){
    echo"This Number Is Positive";
}elseif($myNumber < 0){
    echo"This Number is Negative";
}else{
    echo "This Number is Zero";
}
echo "\n";


// a year is a leap year or not
$myYear = 2017;

if($myYear % 4 == 0 && $myYear % 100 != 0 || $myYear % 400 == 0){
    echo "This is a leap year";
}else{
    echo "This is not a leap year.";
}
echo "\n";

// Largest Number print

$numberOne = 150;
$numberTwo = 150;
$numberThree = 150;

if($numberOne > $numberTwo && $numberOne > $numberThree){
    echo $numberOne;
}elseif($numberTwo > $numberOne && $numberTwo > $numberThree){
    echo $numberTwo;
}elseif($numberThree > $numberOne && $numberThree > $numberTwo){
    echo $numberThree;
}else{
    echo "All Number are Equal";
}
echo "\n";


// ODD and EVEN Check
$mynumber = 13032;
if($mynumber % 2 == 0){
    echo "The number is even";
}else{
    echo "The number is odd";
}
echo "\n";

// Chlid and teenager check
$age = 59;
if($age <=12){
    echo "Your are a child";
}elseif($age <= 19){
    echo "You are a teenager";
}elseif($age <= 59){
    echo "You are a adult";
}
else{
    echo "You are a senior person";
}
echo "\n";

// Grade making
$marks = 185;

if($marks >=90 && $marks <= 100){
    echo "You got A+";
}elseif($marks >=80 && $marks <=89){
    echo "You got A";
}elseif($marks >=70 && $marks <=79){
    echo "You got A-";
}elseif($marks >=60 && $marks <=69){
    echo "You got B";
}elseif($marks >=50 && $marks <=59){
    echo "You got C";
}elseif($marks >=40 && $marks <=49){
    echo "You got D";
}elseif($marks >=33 && $marks <=39){
    echo "You got E";
}elseif($marks > 100){
    echo "You got error";
}else{
    echo "You are fail";
}
echo "\n";


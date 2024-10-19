<?php
// Task 1: PHP script to print all odd numbers between 1 and 10
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}
echo "\n";



// Task 2: Declare a function named 'greet'
function greet($name) {
    echo "Hello, " . $name . "!\n";
}
greet("Tanvir");




// Task 3: Recursive function to calculate the factorial of a number
function factorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}
echo factorial(5);

echo "\n";




// Task 4: Function to print the Fibonacci series up to 12 numbers
function Fibonacci($n) {
    $num1 = 0;
    $num2 = 1;
    echo $num1 . " " . $num2 . " ";
    
    for ($i = 3; $i <= $n; $i++) {
        $num3 = $num1 + $num2;
        echo $num3 . " ";
        $num1 = $num2;
        $num2 = $num3;
    }
}
Fibonacci(10);
?>

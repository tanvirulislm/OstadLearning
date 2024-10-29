<?php 
class Person {
    public $name;
    public $age;

    function introduce(){
        echo "Hi, I am {$this->name}, and I am {$this->age} years old.\n";
    }
}

$john = new Person(); //object
$john->name = "John Doe";
$john->age = 25;
$john->introduce();
// echo "Hi, I am {$john->name} and I am {$john->age} years old.\n";

// echo $john->name;

$jane = new Person(); //object
$jane->name = "Jane Doe";
$jane->age = 24;
$jane->introduce();
// echo $jane->name;
// echo "Hi, I am {$jane->name} and I am {$jane->age} years old.\n";
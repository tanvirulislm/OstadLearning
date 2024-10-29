<?php  

// class Person{
//     public function __construct($name){ //constructor
//         echo "I am a person and my name is {$name}.\n";
//     }
// }

// $john = new Person("john");
// $jane = new Person("jane");
// $jimmy = new Person("jimmy");

$fruits = [
    'apple'=>100,
    'banana'=>50,
    'orange'=>80
];

foreach($fruits as $fruit=>$price){
    echo "{$fruit} - {$price}\n";
}
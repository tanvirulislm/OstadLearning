<?php
$person = [
    'name' => 'John Doe',
    'age' => 30,
    'hobbies' => ['Tennis', 'Swimming'],
];

// echo serialize($person);

$newArray = unserialize('a:3:{s:4:"name";s:8:"John Doe";s:3:"age";i:30;s:7:"hobbies";a:2:{i:0;s:6:"Tennis";i:1;s:8:"Swimming";}}');
echo $newArray['name'];
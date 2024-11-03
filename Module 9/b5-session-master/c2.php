<?php
$person = [
    'name' => 'John Doe',
    'age' => 30,
    'hobbies' => ['Tennis', 'Swimming'],
];
$json = json_encode($person,JSON_PRETTY_PRINT);
file_put_contents("person.json", $json);


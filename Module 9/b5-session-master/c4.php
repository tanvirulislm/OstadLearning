<?php 
$personProfile = [
    'name' => 'John Doe',
    'age' => 30,
    'address' => [
        'street' => '123 Main St',
        'city' => 'Anytown',
        'state' => 'CA',
        'zipcode' => '12345'
    ],
    'addresses'=>[
        'home'=>[
            'street' => '123 Main St X',
            'city' => 'Anytown',
            'state' => 'CA',
            'zipcode' => '12345'
        ],
        'work'=>[
            'street' => '456 Business St',
            'city' => 'Metro City',
            'state' => 'CA',
            'zipcode' => '54321'
        ]
    ],
    'contact' => [
        'email' => 'johndoe@example.com',
        'phone' => '555-1234'
    ],
    'employment' => [
        'job_title' => 'Software Engineer',
        'company' => 'Tech Solutions',
        'years_experience' => 8
    ],
    'education' => [
        'degree' => 'Bachelor of Science in Computer Science',
        'university' => 'State University',
        'graduation_year' => 2015
    ],
    'skills' => [
        'programming_languages' => ['PHP', 'JavaScript', 'Python'],
        'frameworks' => ['Laravel', 'React', 'Django'],
        'tools' => ['Git', 'Docker', 'Jenkins']
    ],
    'hobbies' => ['reading', 'hiking', 'gaming']
];

// $json = json_encode($personProfile, JSON_PRETTY_PRINT);
// $json = json_encode($personProfile);
// file_put_contents("profile.json", $json);

$personData = file_get_contents("profile.json");
$person = json_decode($personData, true);
echo $person['addresses']['home']['street'];
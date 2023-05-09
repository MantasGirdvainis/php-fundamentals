<?php 
echo 'Arrays';

//Simple Array

$numbers = [1, 2, 4, 6];
$fruits = array('apple', 'orange', 'pear');


print_r($fruits);
var_dump($numbers);

// Isspausdinam tik Orange is musus array. Tas pats kaip ir Javascript.
echo $fruits[1];



// Associative Array

// Patys nustatom koki index (keys) tures reiksme. Gali buti bet koks skaicius arba string pavadinimas.


$colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
];

echo $colors[4];


$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00F'
];

echo $hex['blue'];


$person = [
    'first_name' => 'Mantas',
    'last_name' => 'Girdvainis',
    'email' => 'mantas.girdvainis@outlook.com'
];

echo $person['email'];

// Arrays in Array

$people = [
    [
        'first_name' => 'Mantas',
        'last_name' => 'Girdvainis',
        'email' => 'mantas.girdvainis@outlook.com'
    ],
    [
        'first_name' => 'John',
        'last_name' => 'Lalalviva',
        'email' => 'john@outlook.com'
    ],
    [
        'first_name' => 'Peter',
        'last_name' => 'Makintosh',
        'email' => 'peter@outlook.com'
    ]
    ];

// Pasiemam John email pavyzdys zemiau. [1] - tay yra antras array.

echo $people[1]['email'];

//JSON


var_dump(json_encode($people)); // duomnenis padarem i json formata. yra ir decode funkcija kuri padaro is json i paprasta array.

?>
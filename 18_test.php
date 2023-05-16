<?php

// ----Variables and outputs


// echo 'labas', 123, 45;

// $name = 'Petras';
// define('name2', 'Mykolas');

// echo $name, name2;
// print $name;
// var_dump($name);



// ---- Arrays

// $fruits = ['orange', 'apples', 'pears'];
// $numbers = array(1, 2, 3, 4, 5);

// print_r($fruits);
// print_r($numbers);

// $names = [
//     1 => 'Petras',
//     5 => 'Domas',
//     8 => 'Jonas'
// ];

// $surNames = [
//     'Petras' => 'Petraitis',
//     'Domas' => 'Domce',
//     'Jonas' => 'Jonaitis'
// ];

// $arrayInArray = [
//     ['jonas', 'Petras', 'Mantas'],
//     ['Adomas', 'Arunas', 'Virgis']
// ];

// print_r($names);
// print_r($surNames);

// echo $fruits[0];
// echo $names[5];
// echo $surNames['Domas'];
// echo $arrayInArray[1][1];


// ------ Conditionals

// $age = 20;

// if($age > 18) {
//     echo 'turi 18';
// } else {
//     echo 'neturi 18';
// };

// echo $age < 18 ? 'maziau' : 'daugiau';


// ------ functions 

function labas(){
    echo 'labas funckcija';
}

labas();

function suma($n1, $n2){
 return $n1 + $n2;
}

echo suma(2, 2);

$multiply = fn($n1, $n2) => $n1 * $n2;

echo $multiply(5, 5);



?>
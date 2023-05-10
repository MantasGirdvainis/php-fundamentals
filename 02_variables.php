<?php
echo 'hello ';

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = 'Mantas '; //string
$age = 30; // integer
$hasKinds = true; // boolean. Darant echo jeigu false reiksme nieko nerodys, jeigu true rodys 1. Naudokikim var_dum() pavyzdys zemiau.
$cachOnHands = 3.45; // float 

echo $name;
echo $age;
echo $hasKinds;
var_dump($hasKinds);
echo $cachOnHands;

// Jeigu norim stringe irasyti kintamuosius. Naudojam . vietoj + kaip Javascript arba " " dvigubas kabutes vietoj ` ` kaip Javasceipte.

echo $name . 'is ' . $age . ' years old '; // Pirmas sunkesnis variantas.
echo "$name is $age years old "; //Antras lengvesnis variantas.
echo "${name} is ${age} years old "; //Trecias variantas. Rekomenduoja uzdeti lauztinius skliaustus, kad matytusi geriau kintamasis.

$x = '5' + '5'; // gausim 10 ir duomenu tipas bus integer, veikia priesingai nei javascript

var_dump($x);

echo 2 + 5; // Kai darom eko galim daryt is skaiciavimus iskart.
echo 5 * 5; 
echo 10 / 2; 


// Kintamieji, kurie niekada nesikeis. Kaip CONST. Dazniausiai daroma pvz:

define('HOST', 'localhost'); // nurodom pirmiausia pavadinima ir paskui reiksme.
define('DB_NAME', 'dev_db');

echo HOST;

// Perasyti kintamojo reiksme:

$name = 'Lukas';
echo $name;


?>
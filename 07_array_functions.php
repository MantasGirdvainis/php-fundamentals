<?php

/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits = ['apple', 'orange', 'pear'];

//get lenght of array;
echo count($fruits);

//serarch array;
//in_array iesko musu nurodyto 'apple' musu nurodyta, arrayjuje ir grazina reiksme true arba false;
var_dump(in_array('apple', $fruits));

// add to array
// prides 'grape' i pati array gala.
$fruits[] = 'grape';
print_r($fruits);
//kitas variantas pridet i gala.
array_push($fruits, 'blueberry');

//prideti i prieki
array_unshift($fruits, 'mango');
print_r($fruits);

// remove from array
array_pop($fruits); // last array
array_shift($fruits); //first array

//jeigu norim istrinti specifini array value. nurodom indexa.
unset($fruits[2]);

//split into 2 chuks.

$chunked_array = array_chunk($fruits, 2);
print_r($fruits);


// sujungia skirtingus array i viena array. 
$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2]; //spread operatorius tas pats kaip ir javascript.

print_r($arr3);
print_r($arr4);

// Array combine - padaro viena Array is dvieju. $a bus array key, 0 $b bus array value.

$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];

$c = array_combine($a, $b);

print_r($c);

// Isspausdina array keys. 

$keys = array_keys($c);

print_r($keys);

// array_flip - sukeite vietom key su value reiksmem.

$flipped = array_flip($c);
print_r($flipped);

// range - sukuria array nuo 1 iki 20

$numbers = range(1, 20);

print_r($numbers);


// map - paciam gale $numbes tai yra orginalus array per kuri mapinam. $number yra kiekvienas array value per kuri einam.

$newNumbers = array_map(function($number) {
    return "number ${number}";
}, $numbers);

print_r($newNumbers);

// filter

$lessThan10 = array_filter($numbers, fn($number) => $number <= 10);

echo $lessThan10;

// reduce

$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);

var_dump($sum);

echo 'labas';




?>

<?php

$y = 10;
$u = 11;

function registerUser() {
    
    echo $y; //tai yra globalus kintamasis todel ir negalim jo naudoti funkcijoje.
    // bet jeigu prie global kintamojo prirasom global ji galim panaudoti pvz:
    global $u;
    echo $u;

    $x = 10;
    echo 'user registered';
};

registerUser(); //paleidziam funkcija.
echo $x; // nespausdina, nes funkcijos kaip ir javascript turi savo kodo bloka ir $x jam priklauso.
// --------------------------------------------------------------------------------------------------------


function newUser($email) {
    echo $email . 'new user is registered in newUser function.';
};

newUser('Mantas');

// ----------------------------------------------------------------------------------------------------------

function sum($n1, $n2) {
    return $n1 + $n2;
};

$sumFunkcija = sum(2, 4);
echo $sumFunkcija;


// funkcija su default reiksmem, jeigu neperduodam argumentu ------------------------------------------------------------------------------
function sum1($n1 = 5, $n2 = 5) {
    return $n1 + $n2;
};

$sumFunkcija1 = sum1();
echo $sumFunkcija1;

// ------------------------------------------------

$subtract = function($n1, $n2) {
    return $n1 - $n2;
};

echo $subtract(10, 5);

//ARROW FUNKCIJA  --------------------------------------------------

$multiply = fn($n1, $n2) => $n1 * $n2;

echo $multiply(5,5)


?>
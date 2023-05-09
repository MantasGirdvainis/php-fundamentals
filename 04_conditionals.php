<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 17;

if($age >= 18) {
    echo 'You are old enough to vote';
} else {
    echo 'sorry you are not enough to vote';
}




$t = date('H');

if($t < 12) {
    echo 'Good morning';
} elseif ($t < 17 ) {
    echo 'Good afternoon';
} else {
    echo 'Good evening';
};


$posts = [' first post'];

if(!empty($posts)) {
    echo $posts[0];
} else {
    echo 'No post';
};


/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/

echo !empty($posts) ? $posts[0] : 'no posts';

$firstPost = !empty($posts) ? $posts[0] : 'no posts';
$firstPost2 = !empty($posts) ? $posts[0] : null;

// Galim nebenaudoti empty() vietoj to naudojam ??. Jeigu $post[0] reiksme yra true
//tai ja ir priskirst kintamajam, jeigu false tada priskirst null arba kita ka nurodysim.

$firstPost3 = $posts[0] ?? null;
$firstPost4 = $posts[0] ?? 'antra reiksmes';
echo $firstPost4;


/* -------- Switch Statements ------- */

$favcolor = 'blue';

switch($favcolor) {
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'blue':
        echo 'Your favorite color is blue';
        break;
    case 'greem':
        echo 'Your favorite color is green';
        break;
    default:
    echo 'your favorite color is not red, blue and green';
};

?>
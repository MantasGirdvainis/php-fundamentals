<?php


/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

for($x = 0; $x <= 10; $x++) {
    echo $x;
};


/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

$y = 1;
while($y <= 15) {
    echo $y;
    $y++;
};



/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/

$u = 1;

do {
    echo $u;
    $u++;
} while($u <= 5);




/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/


$posts = ['first post', 'second post', 'third loop'];

for($x = 0; $x <count($posts); $x++) {
    echo $posts[$x];
};

foreach($posts as $post) {
    echo $post;
}

?>
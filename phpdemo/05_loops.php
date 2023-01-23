<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

// for ($x = 1; $x < 10; $x++) {
//   echo "Number: $x <br>";
// }


/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
    //code to be executed
  // code to be executed
  }
*/

// $x = 1;
// while ($x <= 10) {
//   echo "Number: $x <br>";
//   $x++;
// }

//do while

/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/

// do{
//   echo "Number: $X <br>";
//   $x++;
// }while ($x <= 10);

/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

$posts = ['Fierst Post', 'Second Post','Third Post'];
for ($x = 0; $x < count($posts); $x++) {
  echo "$posts[$x] <br>";
}
echo "<br>";
foreach($posts as $post) {
  echo "$post <br>";
}

// assiociative array
$person = [
  'first_name' => 'Neil',
  'last_name' => 'Sumalde',
  'email' => 'nelsumalde@gmail.com'
];

//Get key
// foreach ($person as $key => $val){
//     echo "$key - $val <br>";
// }
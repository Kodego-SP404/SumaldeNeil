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

//age = 20, lets check if eligible to vote
// $age = 17;
// if ($age >= 18){
//     echo 'You are old enough to vote';
// } else{
//     echo 'sorry, you are not eligible to vote!';
// }

// $t = 18;
// echo $t;

// if ($t <= 12) {
//     echo ' Have a great moring';
// } elseif ($t <= 17) {
//     echo ' Have a great afternoon';
// } else {
//     echo ' good evening';
// }

$posts = ['AYOS'];

// if(!empty($posts[0])){
//     echo $posts[0];
// } else {
//     echo 'There are no posts';
// }

//ternary operator

//the ternary operator is a shorthand if statement
// ternary syntax:
// condition ? true : false;
// $firstPost = !empty($posts) ? $posts[0] : 'No posts';
// echo $firstPost;

$favcolor = 'red';

switch ($favcolor) {
    case 'red':
        echo ' Your favorite color is red!';
        break;
    case 'green':
        echo ' Your favorite color is green!';
        break;
    case 'blue':
        echo ' Your favorite color is blue';
        break;
    case 'red':
        echo ' Your favorite color is neither red, green nor blue';
        break;
}
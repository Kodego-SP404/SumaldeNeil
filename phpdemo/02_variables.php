<?php
/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$fname = 'Neil';
$age = 23;
$hasKids = False; // boolean
$cashOnHand = 10.5; //float
// echo "$fname is $age years old";
// echo $hasKids;
// var_dump($hasKids);
// echo $cashOnHand;
// var_dump($cashOnHand);

//this will not work
// echo '$fname is $age years old';

//concatenate strings
// echo "$fname is $age years old";
// echo "<br>";
echo $fname . ' is ' . ' years old';
echo nl2br("\n$fname is $age years old");

//arithmethic operatiors
echo "<br>";

echo '5' + '5';
$x = '5' + '5';
echo "<br>";
echo $x;
echo "<br>";
var_dump($x);
echo "<br>";
echo 5 + 5;

echo "<br>";
echo 10 - 6;

echo "<br>";
echo 95 * 95;

echo "<br>";
echo 500 / 25;

//Constants - cannot be change
echo "<br>";
define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

var_dump(HOST);

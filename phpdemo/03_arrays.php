<?php
/* ----------------arrays------------------- */
/* Array hold multiple values. Each value in an array is called "element" */

//Simple array of numbers
// $numbers = [1,2,3,4,5];
// $fruits = ['apple', 'orange', 'banana'];
// echo $numbers[0];
// var_dump($numbers);
// echo $fruits[1];
// echo $numbers[2] + $numbers[3];

//associative arrays
// associate arrays allows us to use named keys to identify values

// $colors = [
//     1 => 'red',
//     2 => 'green',
//     3 => 'blue',
//     4 => 'yellow',
// ];

// echo $colors[3];

//string as keys
// $hex = [
//     'red' => '#f00',
//     'green' => '#0f0',
//     'blue' => '#00f',
// ];

// echo $hex['red'];
// var_dump($hex);

// multi-dimensional arrays are often used to store data in a table format.

// single person
// $person = [
//     'first_name' => 'Neil',
//     'last_name' => 'Sumalde',
//     'email' => 'nelsumalde@gmail.com'
// ];

// echo $person['frist_name'];

//multidimensional array
$people = [
    [
    'first_name' => 'Neil',
    'last_name' => 'Sumalde',
    'email' => 'nelsumalde@gmail.com'
    ],
    [
    'first_name' => 'juan',
    'last_name' => 'delacruz',
    'email' => 'jdelazruz@gmail.com'
    ],
    [
    'first_name' => 'pablito',
    'last_name' => 'santos',
    'email' => 'psantos@gmail.com'
    ],
];

//echo $people[2]['last_name'];

//encode to json
var_dump(json_encode($people));

//decode to JSON
$jsonobj = '{"firs_name": "Neil", "last_name":"Sumalde","email":"nelsumalde@gmail.com"}';
var_dump(json_decode($jsonobj));


<?php
/* ---------array functions------- 
// functions to work with arrays

https://www.php.net/manual/en/ref.array.php*/

$fruits = ['apple', 'banana', 'orange'];

//get array length
//echo count($fruits);

//Search Array
// echo in_array('banana',$fruits);
//var_dump(in_array('banana', $fruits));

// $fruits = ['grapes']; //add to the end
// array_push($fruits, 'mango', 'raspberry'); //add to the end using push
// array_unshift($fruits, 'kiwi'); //adds to the beginning
// print_r($fruits);

// //remove from an array
// array_pop($fruits); //raspberry
// array_shift($fruits);

// //remove specific element
// // unset($fruits[2]); //remove orange
// print_r($fruits);

// //split into chunks of 2
// $chunkedArray = array_chunk($fruits, 2);
// print_r($chunkedArray);

// //concatenate arrays
// $arr1 = [1,2,3];
// $arr2 = [4,5,6];
// $arr3 = array_merge($arr1, $arr2);
// print_r($arr3);
// $arr4 = [...$arr1, ...$arr2];
// print_r($arr4);

// //Combine arrays (keys and values)
// $a = ['green', 'red', 'yellow'];
// $b = ['avocado', 'apple', 'banana'];
// $c = array_combine($a, $b);
// print_r($c);

// //arrays of keys
// $keys = array_keys($c);
// print_r($keys);

// //flip keys with values
// $flipped = array_flip($c);
// print_r($flipped);

//create array of number with range
$numbers = range(1,10);
// print_r($numbers);

//map through array and create a new one

$newNumbers = array_map(function ($number){
    return "number $number";
}, $numbers);
print_r($newNumbers);

//filter array
$lessThan5 = array_filter($numbers, fn($number) => $number <= 5);
print_r($lessThan5);

//array reduce
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
print_r($sum);

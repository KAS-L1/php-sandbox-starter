<?php 



// function add($a, $b) {
//     return $a + $b;
// };

// echo add(1, 4);


$add = fn ($a, $b) => $a + $b;

// echo $add(1, 4);

$numbers = [1,2,3,4,5,];

// $squaredNumbers = array_map(function ($number) {
//     return $number *= $number;
// }, $numbers);


// print_r($squaredNumbers);


// We want to create a new array where each number is squared (i.e., multiplied by itself).
// We can use a special function called array_map to do this.
$squaredNumbers = array_map(
    // This is an anonymous function that takes a number and returns its square.
    // The "fn" keyword is a shorthand way to create an anonymous function.
    fn ($number) => $number * $number,
    // This is the array of numbers we want to square.
    $numbers
);

// Now we can print out the new array with the squared numbers.
print_r($squaredNumbers);
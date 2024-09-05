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

$squaredNumbers = array_map(fn ($number) => $number * $number,
 $numbers);


print_r($squaredNumbers);
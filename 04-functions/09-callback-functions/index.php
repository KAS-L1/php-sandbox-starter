<?php 

$numbers = [1,2,3,4,5];

$square = function ($number) {
    return $number *= $number;
};

$squaredNumbers = array_map($square, $numbers);

// print_r($squaredNumbers);

// Define a function called applyCallback that takes two arguments: $callback and $value
function applyCallback($callback, $value) {
    // This function simply calls the $callback function and passes $value as an argument
    // The result of the callback function is returned
    return $callback($value);
}

// Define an anonymous function (a closure) that takes a single argument $number
$double = function($number) {
    // This function multiplies the input $number by 2 and returns the result
    return $number * 2;
};

// Call the applyCallback function, passing the $double function as the first argument
// and the value 5 as the second argument
$result = applyCallback($double, 5);

// Echo the result, which should be 10 (because 5 * 2 = 10)
echo $result;



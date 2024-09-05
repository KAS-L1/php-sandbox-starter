<?php

// We're creating a special kind of function called an "anonymous function".
// It's like a regular function, but we don't give it a name.
$square = function ($number) {
    // This function takes a number and returns its square (i.e., the number multiplied by itself).
    return $number * $number;
};

// We're calling the anonymous function with the number 5 and storing the result in a variable.
$result = $square(5);

// We're printing out the result.
echo "The square of 5 is $result". '<br>';

// Now we're going to learn about something called a "closure".
// A closure is a function that has access to its own special variables.

// We're creating a function called createCounter that returns another function.
function createCounter() {
    // This variable is special because it's only accessible inside this function.
    $count = 0;

    // We're creating another anonymous function that uses the special variable.
    $counter = function() use (&$count) {
        // The "&" symbol means we're using the original variable, not just a copy.
        // This function increments the special variable and returns its new value.
        return ++$count;
    };

    // We're returning the anonymous function.
    return $counter;
}

// We're calling the createCounter function and storing the result in a variable.
$counter = createCounter();

// We're calling the counter function multiple times and printing out the results.
// Each time we call it, the special variable increments by 1.
echo $counter() . '<br>'; // prints 1
echo $counter() . '<br>'; // prints 2
echo $counter() . '<br>'; // prints 3
echo $counter() . '<br>'; // prints 4
echo $counter() . '<br>'; // prints 5
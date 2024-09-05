<?php

// This line declares that the script will use strict typing, which means that PHP will throw errors if the types of variables or function parameters don't match the declared types
declare(strict_types = 1);

// This line defines a function called getSum that takes two integer parameters $a and $b, and returns an integer value
function getSum(int $a, int $b): int{
    // This line returns the sum of $a and $b
    return $a + $b;
}

// This line calls the getSum function with the arguments 1 and 1, and outputs the result
echo getSum(1, 1);

// This line defines a function called greeting that takes a string parameter $name, and returns void (i.e., no value)
function greeting(string $name): void{
    // This function is currently empty, so it doesn't do anything
}

// This line calls the greeting  function with the argument 'John', but since the function returns void, there's nothing to echo
echo greeting('John');
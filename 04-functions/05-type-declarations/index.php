<?php 

// We're telling PHP to be very strict about the types of variables and function parameters.
// This means if we try to use the wrong type, PHP will throw an error.
declare(strict_types = 1);

// We're defining a function called getSum that takes two integer parameters, $a and $b.
// The function returns an integer value, which is the sum of $a and $b.
function getSum(int $a, int $b): int{ //: int return int 
    // We're simply adding $a and $b together and returning the result.
    return $a + $b;
}

// We're calling the getSum function with the arguments 1 and 1, and printing the result.
echo getSum(1, 1);

// We're defining another function called greeting that takes a string parameter $name.
// This function doesn't return any value, so we use the "void" type.
function greeting(string $name): void{
    // This function is currently empty, so it doesn't do anything.
}

// We're calling the greeting function with the argument 'John', but since it returns void, there's nothing to print.
echo greeting('John');
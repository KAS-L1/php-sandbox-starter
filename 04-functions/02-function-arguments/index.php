<?php

// function add ($a, $b) {
//     return $a + $b;
// }

// echo add(1, 2); 
// echo '<br>';
// echo add(100, 250);

// function sayHello($name = 'World') {
//     return 'Hello ' . $name;
// }

// echo sayHello();

//splat operator 
// This line defines a new function called addAll
function addAll(...$numbers) 
{
    // This line initializes a variable $total to 0, which will be used to store the sum of the numbers
    $total = 0;

    // This line starts a foreach loop that will iterate over the $numbers array
    foreach ($numbers as $number) {
        // This line adds the current number to the $total
        $total += $number;
    }
    
    // This line returns the total sum of the numbers
    return $total;
}

// This line calls the addAll function with the arguments 1, 3, 4, 6, and 8, and outputs the result
echo addAll(1, 3, 4, 6, 8);

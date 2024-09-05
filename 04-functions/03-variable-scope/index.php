<?php 

// We're outside of any function, so we're in the "global scope".
// Think of it like a big room where everyone can see and use the same things.

// We have a variable called $name, and we're setting it to "Alice".
$name = "Alice";

// Now we're defining a function called sayHello.
function sayHello()
 {    
    // We want to use the $name variable from the global scope, so we use the "global" keyword.
    global $name;
    
    // Now we're inside the sayHello function, so we're in a "local scope".
    // Think of it like a small room inside the big room, where we can have our own things.
    
    // We're changing the value of $name to "Bob", but only inside this small room.
    $name = 'Bob';
    
    // We're saying hello to Bob!
    echo 'Hello ' . $name;
}

// Now we're back in the big room (global scope).
// We're creating an empty array called $names.
$names = [];

// We're defining another function called sayGoodbye.
function sayGoodbye() {
    // We want to use the $names variable from the global scope, so we use the "global" keyword again.
    global $names;
    
    // We're inside the sayGoodbye function now, so we're in another local scope.
    
    // We're changing the value of $names to an array with two names: "jack" and "jill".
    $names = ['jack', 'jill'];
    
    // This line is commented out, so it won't do anything.
    // echo "Goodbye $names";
}

// We're calling the sayGoodbye function, which will change the value of $names.
sayGoodbye();

// Now we're back in the big room (global scope).
// We're echoing the first element of the $names array, which is "jack".
echo $names[0];
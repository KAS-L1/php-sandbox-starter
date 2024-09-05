<?php 

// Global scope 
$name = "Alice";


function sayHello()
 {    
    global $name;
    // Local Scope
    $name = 'Bob';
    echo 'Hello ' . $name;
}

// This line initializes an empty array called $names in the global scope
$names = [];

// This line defines a function called sayGoodbye
function sayGoodbye() {
    // This line uses the global keyword to access the $names variable from the global scope
    global $names;
    
    // This line assigns a new value to the $names variable, which is an array containing the strings 'jack' and 'jill'
    $names = ['jack', 'jill'];
    
    // This line is commented out, so it won't be executed
    // echo "Goodbye $names";
}

// This line calls the sayGoodbye function
sayGoodbye();

// This line outputs the first element of the $names array, which is 'jack'
echo $names[0];


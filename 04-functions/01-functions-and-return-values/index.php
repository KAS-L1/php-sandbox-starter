<?php 

// This is a special function that says "Hello World" when we call it
function sayHello() 
{
    // This line prints "Hello World" on the screen
    echo 'Hello World';
}

// This is another special function that returns the word "Goodbye"
function sayGoodbye()
{
    // This line sends the word "Goodbye" back to whoever called this function
    return 'Goodbye';
}

// We're calling the sayGoodbye function and storing its result in a variable called $goodbye
$goodbye = sayGoodbye();

// Now we're printing the value of $goodbye on the screen
echo $goodbye;
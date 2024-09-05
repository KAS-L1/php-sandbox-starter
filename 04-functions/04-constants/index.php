<?php 

// We're defining two special constants, like labels, that we can use throughout our code.
// One is called APP_NAME, and its value is "My App".
define('APP_NAME', 'My App');

// The other is called APP_VERSION, and its value is "1.0.0".
define('APP_VERSION', '1.0.0');

// Now we're going to print out the values of these constants.
echo APP_NAME; // This will print "My App"
echo APP_VERSION; // This will print "1.0.0"

// We're adding a line break, so the next output will be on a new line.
echo '<br>';

// Now we're defining two more constants, but this time using the "const" keyword.
// One is called DB_NAME, and its value is "mydb".
const DB_NAME = 'mydb';

// The other is called DB_HOST, and its value is "localhost".
const DB_HOST = 'localhost';

// We're going to print out the values of these constants too.
echo DB_NAME, DB_HOST; // This will print "mydblocalhost"

// Now we're defining a short function called "run".
function run() {
    // Inside this function, we're going to print out the values of our constants again.
    echo APP_NAME; // This will print "My App"
    echo DB_NAME, DB_HOST; // This will print "mydblocalhost"
}

// Finally, we're calling the "run" function, which will execute the code inside it.
run();
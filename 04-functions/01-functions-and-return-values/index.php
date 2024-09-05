<?php 


function sayHello() 
{
    echo 'Hello World';
}

function sayGoodbye()
{
    return 'Goodbye';
}


$goodbye = sayGoodbye();
echo $goodbye;
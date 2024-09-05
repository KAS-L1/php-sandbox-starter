<?php

$names = array('John', 'Jack', 'Jill');
$numbers = [1, 3, 4, 5];

function inspect($value) 
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>.';

}

// inspect($names);
// inspect($numbers);

// print_r($names);

// echo $names[2];
// echo $numbers[3];

// Add element to array 

$numbers[3] = 100;
$numbers[] = 100;

$numbers[4] = 100;

unset($numbers[3]);

$names = array_values($numbers);




inspect($numbers);
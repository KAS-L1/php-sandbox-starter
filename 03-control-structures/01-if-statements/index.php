<?php

$age = 12;

// If statement

if($age >= 21){
    echo 'You are old enough to drink in the US';
}
echo '<br>';

// If-Else

if($age >= 31){
    echo 'You are old enough to drink in the US';
} else {
    echo 'You are NOT old enough to drink in the US';
}
echo '<br>';


// Nested if statement
if($age >= 31){
    echo 'You are old enough to drink in the US';
} else {
    if ($age >= 18) {
        echo 'You are old enough to vote in US';
    } else {
        echo 'You are NOT old enough to drink in the US';
    }
}
echo '<br>';


// If-Else-If

if($age >= 31){
    echo 'You are old enough to drink in the US';
} else if ($age >18){
    echo 'You are old enough to vote in US';
} else {
    echo 'You are NOT old enough to drink in the US';
}



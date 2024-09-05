<?php

/*
  PHP DATA TYPES:

- String
- Integer
- Float
- Boolean
- Array
- Object
- NULL
- Resource
*/

// String
  $name = "Kier Salise";
  $name2 = "Sheila Velasco";

  var_dump($name);
  echo '<br>';
  #echo getType($name2);

  // Integer
  $age = 35;
  var_dump($age);
  echo '<br>';

  // FLoat
  $rating = 99.4;
  var_dump($rating);
  echo '<br />';

  // Boolean 
  $isLoaded = true;
  var_dump($isLoaded); 
  echo '<br />'; 

  // Array
  $friends = ["Kier", "Sheila", "Mercy"];
  var_dump($friends);
  echo '<br />'; 

  // Object
  $person = new stdClass();
  var_dump($person);
  echo '<br>';

  // Null
  $car = null;
  var_dump($car);
  echo '<br>';

  // Resource
  $file = fopen('sample.txt', 'r');
  var_dump($file);



<?php
/*
  Challenge 1: Fahrenheit to Celsius
  Create a function called `fahrenheitToCelsius` that takes a Fahrenheit temperature as an argument. Return the temperature converted to Celsius.

  The formula to convert Fahrenheit to Celsius is: Celsius = (Fahrenheit - 32) * 5/9
*/


// function fahrenheitToCelsius($Fahrenheit) {

//   $Celsius = ($Fahrenheit - 32) * 5/9;
//   return $Celsius;

// }

// $fahrenheitToCelsius = fn ($Fahrenheit) => ($Fahrenheit - 32) * 5/9;





$degToConvert = 68;

echo "$degToConvert &deg;F = fahrenheitToCelsius($degToConvert)  &deg;C\n";

echo '<br>';

$baseTemp = 32;

$fahrenheitToCelsius = function ($Fahrenheit) use ($baseTemp) {
return ($Fahrenheit - 32) * 5/9;
};

$degToConvert = 68;

echo $degToConvert . '&deg;F = '. $fahrenheitToCelsius($degToConvert). '&decC';



/*
  Challenge 2: Print names in uppercase
  Create a function called `printNamesToUpperCase` that takes an array of names as an argument. The function should loop through the array and print each name to the screen in uppercase letters.
*/



function printNamesInUppercase($names) {
      foreach($names as $name) {
        $uppercaseName = strtoupper($name);
        echo "$uppercaseName <br>";
      }
}
$names = ['Alice', 'Bob', 'Charlie', 'David'];
printNamesInUppercase($names);




echo '<br>';

/*
  Challenge 3: Find the longest word
  1. Create a function called `findLongestWord` that takes a sentence as an argument.
  2. The function should return the longest word in the sentence.
  3. The output should look like this:
*/


$sentence = 'The quick brown fox jumped over the lazy dog';
$longestWord = findLongestWord($sentence);
echo $longestWord; // should print 'jumped'

function findLongestWord($sentence) {
  // Split the sentence into an array of words
  $words = explode(' ', $sentence);
  // Initialize the longest word variable
  $longestWord = '';

  // Loop through the words array
  foreach ($words as $word) {
      // Trim the word to remove any whitespace
      $word = trim($word);
      // Check if the current word is longer than the longest word
      if (strlen($word) > strlen($longestWord) || $longestWord === '') {
          $longestWord = $word;
      }
  }

  return $longestWord;
}

function findMostFrequentWord($sentence) {
  // Split the sentence into an array of words
  $words = explode(' ', $sentence);
  
  // Initialize an associative array to store the frequency of each word
  $wordFrequency = array();
  
  // Loop through the words array
  foreach ($words as $word) {
    // Trim the word to remove any whitespace
    $word = trim($word);
    
    // Check if the word is already in the frequency array
    if (isset($wordFrequency[$word])) {
      // If it is, increment its frequency
      $wordFrequency[$word]++;
    } else {
      // If not, add it to the array with a frequency of 1
      $wordFrequency[$word] = 1;
    }
  }
  
  // Find the word with the highest frequency
  $mostFrequentWord = '';
  $maxFrequency = 0;
  foreach ($wordFrequency as $word => $frequency) {
    if ($frequency > $maxFrequency) {
      $mostFrequentWord = $word;
      $maxFrequency = $frequency;
    }
  }
  
  return $mostFrequentWord;
}

$sentence = 'The quick brown fox jumped over the lazy dog the quick brown fox';
$mostFrequentWord = findMostFrequentWord($sentence);
echo $mostFrequentWord; // should print 'the'
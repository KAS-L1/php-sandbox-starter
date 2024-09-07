<?php 

// This is a class named StringUtility. Think of it like a special box that has tools (functions) to work with words (strings).
class StringUtility {
    
    // This is a special tool (function) called shout.
    // It takes in some words (a string) and makes them all uppercase (like shouting!).
    public static function shout($string) {
        return strtoupper($string); // strtoupper makes all letters BIG.
    }

    // This is another tool (function) called whisper.
    // It makes all the words lowercase (like whispering quietly).
    public static function whisper($string) {
        return strtolower($string); // strtolower makes all letters small.
    }

    // This tool (function) repeats the words a number of times.
    // It takes in words and a number, and repeats the words that many times.
    public function repeat($string, $times) {
        return str_repeat($string, $times); // str_repeat repeats the words as many times as we tell it.
    }
}

// We are creating a new StringUtility object (like getting our box of tools).
$StringUtility = new StringUtility(); 

// This is the word we will play with (hello world).
$string = "hello world";

// Now let's use the shout tool to make the word loud (all uppercase letters).
echo $StringUtility::shout($string); // Outputs: HELLO WORLD
echo "\n"; // This is just to add a new line.

// Let's use the whisper tool to make the word quiet (all lowercase letters).
echo $StringUtility::whisper($string); // Outputs: hello world
echo "\n"; // Another new line.

// Finally, let's use the repeat tool to say the word 3 times.
echo $StringUtility->repeat($string, 3); // Outputs: hello worldhello worldhello world

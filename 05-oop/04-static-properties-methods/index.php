<?php 

// Let's create a special box called MathUltility where we can store math tools
class MathUltility 
{
    // Inside this box, we have a special number called pi (but we made a mistake, it's actually 3.14!)
    public static $pi = 3.14;

    // We also have a special machine that can add lots of numbers together
    public static function add(...$nums) {
        // This machine uses a special power called array_sum that adds up all the numbers
        return array_sum($nums);
    }

}

// Now, let's open the box and get the special number pi
echo  MathUltility::$pi; // Outputs: 3.14

// And let's use the adding machine to add some numbers together!
echo MathUltility::add(1, 2, 3, 4, 5);

// But wait, what does the ...$nums mean? It means we can add as many numbers as we want!
// For example, we could do MathUltility::add(1, 2, 3, 4, 5, 6, 7, 8, 9, 10) and it would still work!


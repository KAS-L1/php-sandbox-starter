<?php 


class MathUltility 
{
    public static $pi = 3.4;

    public static function add(...$nums) {
        return array_sum($nums);
    }

}

echo  MathUltility::$pi; // Outputs: 3.4
echo MathUltility::add(1, 2, 3, 4, 5);





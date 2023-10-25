<?php
class Math {
    //static property to keep track of the number of calculations
    public static $calculationCount = 0;
    //static method to add two numbers
    public static function add($a, $b){
        self::$calculationCount++;
        $return $a + $b;
    }

    //static method to substract two numbers
    public static function subtract($a, $b){
        self::$calculationCount++;
        return $a-$b;
    }

    //static method to get the total number of calculations
    public static function getCalculationCount(){
        return self::$calculationCount;
    }
}

$result1 = Math::add(10,5);
$result2 = Math::subtract(20,8);

//Get the total number of calculations
$totalCalculations = Math::getCalculationCount();

echo "Result 1: $result1\n";
echo "Result 2: $result2\n";

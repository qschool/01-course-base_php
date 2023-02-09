<?php

function calculateSum($minValue = 0, ...$numbers)
{
    $sum = 0;
    foreach ($numbers as $number) {
        if ($number < $minValue) {
            continue;
        }
        
        $sum += $number;
    }
    
    return $sum;
}

$sum1 = calculateSum(1, 1, 2, 3);

echo $sum1 . PHP_EOL; // 6
echo calculateSum(1, 1, 2, 3) . PHP_EOL; // 6
<?php

function sumOnlyBiggerNumbers($minValue = 0, ...$numbers)
{
    $sum = 0;
    foreach ($numbers as $number) {
        if ($number < $minValue) {
            continue;
        }
        
        $sum += $number;
    }
    
    echo $sum . PHP_EOL;
}

sumOnlyBiggerNumbers(); // 0
sumOnlyBiggerNumbers(3, 1, 2, 3, 4); // 7
sumOnlyBiggerNumbers(1, 1, 2, 3, 4, 5, 6); // 21

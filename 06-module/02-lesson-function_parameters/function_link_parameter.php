<?php

function increaseValue(&$value)
{
    $value += 2;
}

$number = 3;

echo $number . PHP_EOL; // 3

increaseValue($number);
echo $number . PHP_EOL; // 5

<?php

$number = 5;

echo -$number . PHP_EOL; // -5

$number1 = 10;
$number2 = 5;

echo $number1++ . PHP_EOL; // 10
echo $number1 . PHP_EOL;   // 11

echo $number2-- . PHP_EOL; // 5
echo $number2 . PHP_EOL;   // 4

$number1 = 10;
$number2 = 5;

echo ++$number1 . PHP_EOL; // 11
echo $number1 . PHP_EOL;   // 11

echo --$number2 . PHP_EOL; // 4
echo $number2 . PHP_EOL;   // 4

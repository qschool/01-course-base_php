<?php

$number1 = 10;
$number2 = 5;

echo 'Сложение + : ' . ($number1 + $number2) . PHP_EOL;
echo 'Вычитание - : ' . ($number1 - $number2) . PHP_EOL;
echo 'Умножение * : ' . ($number1 * $number2) . PHP_EOL;
echo 'Деление / : ' . ($number1 / $number2) . PHP_EOL;


echo 'Остаток от деления % : ' . (6 % $number2) . PHP_EOL;

// Сложение + : 15
// Вычитание - : 5
// Умножение * : 50
// Деление / : 2
// Остаток от деления % : 1


// $number2 = $number2 + 4;
$number2 += 4;
echo $number2 . PHP_EOL; // 9
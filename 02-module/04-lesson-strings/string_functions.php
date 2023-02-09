<?php

// strlen|mb_strlen
$user = 'Mikhail';
$userStringLength = strlen($user);

echo "Длина строки $user равна: $userStringLength" . PHP_EOL;
// Длина строки Mikhail равна: 7


$user = 'Михаил';
$userStringLength = strlen($user);

echo "Длина строки $user равна: $userStringLength" . PHP_EOL;
// Длина строки Mikhail равна: 12

$userStringLength = mb_strlen($user);

echo "Длина строки $user равна: $userStringLength" . PHP_EOL;
// Длина строки Mikhail равна: 6


echo PHP_EOL;

// trim|ltrim|rtrim
$lineToTrim = '   Строка   с   пробелами   ';

echo 'Получившаяся строка: "' . trim($lineToTrim) . '"' . PHP_EOL;
echo 'Получившаяся строка: "' . ltrim($lineToTrim) . '"' . PHP_EOL;
echo 'Получившаяся строка: "' . rtrim($lineToTrim) . '"' . PHP_EOL;
// Получившаяся строка: "Строка   с   пробелами"
// Получившаяся строка: "Строка   с   пробелами   "
// Получившаяся строка: "   Строка   с   пробелами"

$url = '/page/';
echo 'Получившаяся строка: "' . trim($url, '/') . '"' . PHP_EOL;
// Получившаяся строка: "page"

echo PHP_EOL;

// strpos|stripos
$sentence = 'This program on PHP';
echo 'Позиция подстроки: ' . strpos($sentence, 'PHP') . PHP_EOL;
echo 'Позиция подстроки: ' . strpos($sentence, 'php') . PHP_EOL;
echo 'Позиция подстроки: ' . stripos($sentence, 'php') . PHP_EOL;
// Позиция подстроки: 16
// Позиция подстроки: 
// Позиция подстроки: 16

echo PHP_EOL;

// substr|mb_substr

echo substr('Hello World', 2) . PHP_EOL;
echo substr('Hello World', 2, 2) . PHP_EOL;
echo substr('Hello World', -5) . PHP_EOL;
echo substr('Hello World', -5, 1) . PHP_EOL;
echo substr('Hello World', 2, -2) . PHP_EOL;
// llo World
// ll
// World
// W
// llo Wor

echo PHP_EOL;

// str_replace

echo str_replace('не ', '', 'Я не знаю PHP') . PHP_EOL;
// Я знаю PHP
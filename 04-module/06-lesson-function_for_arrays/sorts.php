<?php

$numbers = [1, 3, 8, 4, 6, 9, 0];

// sort|rsort
sort($numbers);
var_dump($numbers); // [0, 1, 3, 4, 6, 8, 9]

rsort($numbers);
var_dump($numbers); // [9, 8, 6, 4, 3, 1, 0]

echo PHP_EOL . PHP_EOL;

$numbersWithKeys = [
    'a' => 1,
    'b' => 3,
    'c' => 8,
    'd' => 4,
    'e' => 6,
    'f' => 9,
    'j' => 0,
];
asort($numbersWithKeys);
var_dump($numbersWithKeys);
// ['j' => 0, 'a' => 1, 'b' => 3, 'd' => 4, 'e' => 6, 'c' => 8, 'f' => 9]

arsort($numbersWithKeys);
var_dump($numbersWithKeys);
// ['f' => 9, 'c' => 8, 'e' => 6, 'd' => 4, 'b' => 3, 'a' => 1, 'j' => 0]

echo PHP_EOL . PHP_EOL;

$numbersWithKeys2 = [
    'a' => 1,
    'd' => 2,
    'f' => 3,
    'b' => 4,
    'e' => 5,
    'j' => 6,
    'c' => 7,
];
ksort($numbersWithKeys2);
var_dump($numbersWithKeys2);
// ['a' => 1, 'b' => 4, 'c' => 7, 'd' => 2, 'e' => 5, 'f' => 3, 'j' => 6]

krsort($numbersWithKeys2);
var_dump($numbersWithKeys2);
// ['j' => 6, 'f' => 3, 'e' => 5, 'd' => 2, 'c' => 7, 'b' => 4, 'a' => 1]


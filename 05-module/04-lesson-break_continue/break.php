<?php

$numbers = [1, 2, 3, 4, 5];
$maxValue = 2;

foreach ($numbers as $number) {
    if ($number > $maxValue) {
        echo "Достигнут предел $maxValue. Цикл завершен" . PHP_EOL;
        break;
    }
    
    echo "Число $number подходит" . PHP_EOL;
}

// Число 1 подходит
// Число 2 подходит
// Достигнут предел 2. Цикл завершен

$matrix = [
    [1, 2, 3, 4, 5],
    [6, 7, 8, 9, 10],
    [11, 12, 13, 14, 15],
];

$needNumber = 9;

for ($i = 0; $i < count($matrix); $i++) {
    for ($j = 0; $j < count($matrix[$i]); $j++) {
        if ($matrix[$i][$j] === $needNumber) {
            echo "Искомое число $needNumber в матрице находится на позиции: $i:$j" . PHP_EOL;
            break(2);
        }
    }
}
// Искомое число 9 в матрице находится на позиции: 1:3

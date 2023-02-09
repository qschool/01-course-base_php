<?php

$keyPressedCode = rand(32, 41);

if (rand(0, 4) > 2) {
    $keyPressedCode = 13;
}
if (rand(0, 4) > 2) {
    $keyPressedCode = 27;
}

echo "Код символа $keyPressedCode" . PHP_EOL;

$keyType = match ($keyPressedCode) {
    37, 38, 39, 40 => 'Стрелки направлений',
    27 => 'Esc',
    13 => 'Enter',
    32 => 'Space',
    default => 'другая клавиша'
};

echo $keyType . PHP_EOL;
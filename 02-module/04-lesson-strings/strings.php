<?php

// Сроки
$user = 'Михаил';

// Обычная строка
$sentence1 = '$user программирует на php';

// Компилируемая строка
$sentence2 = "$user программирует на php";

echo '$user программирует на php';
echo PHP_EOL;
echo "$user программирует на php";
echo PHP_EOL;
// $user программирует на php
// Михаил программирует на php

// Конкатенация строк
echo $user . ' программирует на php' . PHP_EOL;

$line = 'Привет';
$line .= ', ' . $user;

echo $line . PHP_EOL;
// Привет, Михаил

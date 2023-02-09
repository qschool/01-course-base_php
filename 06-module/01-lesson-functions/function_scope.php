<?php
$mainNumber = 3;

function showNumber()
{
    $number = 5;
    echo 'Переменная mainNumber внутри функции: ' . ($mainNumber ?? 'Переменная не существует') . PHP_EOL;
    echo 'Переменная number внутри функции: ' . ($number ?? 'Переменная не существует') . PHP_EOL;
}

showNumber();

echo 'Переменная mainNumber вне функции: ' . ($mainNumber ?? 'Переменная не существует') . PHP_EOL;
echo 'Переменная number вне функции: ' . ($number ?? 'Переменная не существует') . PHP_EOL;

// Переменная mainNumber внутри функции: Переменная не существует
// Переменная number внутри функции: 5
// Переменная mainNumber вне функции: 3
// Переменная number вне функции: Переменная не существует


echo PHP_EOL;

$word = 'Привет из файла';

function showWord()
{
    $word = 'Привет из функции';
    echo $word . PHP_EOL;
}

showWord();

echo $word . PHP_EOL;
// Привет из функции
// Привет из файла

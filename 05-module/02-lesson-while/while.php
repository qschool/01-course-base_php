<?php

$sum = 0;
$productsCount = 0;

while ($sum < 100 && $productsCount < 20) {
    $productPrice = rand(1, 10);
    $sum += $productPrice;
    $productsCount++;
}

echo "Куплено товаров: $productsCount. На сумму: $sum" . PHP_EOL;
// Куплено товаров: 16. На сумму: 103
// …или…
// Куплено товаров: 20. На сумму: 92


echo PHP_EOL;

$moneyLeft = rand(5, 15);
$productPrice = 10;
$productsCount = 0;

do {
    $moneyLeft -= $productPrice;
    $productsCount++;
} while ($moneyLeft - $productPrice > 0);

echo "Куплено товаров: $productsCount. Осталось денег: $moneyLeft" . PHP_EOL;
if ($moneyLeft < 0) {
    echo 'Кажется, вы влезли в кредит' . PHP_EOL;
}
// Куплено товаров: 1. Осталось денег: 4
// …или…
// Куплено товаров: 1. Осталось денег: -5
// Кажется, вы влезли в кредит

/**
while (true) {
    // логика работы демона
    sleep(1);
}
*/

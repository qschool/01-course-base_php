<?php

$basket = [
    [
        'product' => 'Тетрис',
        'price' => 250,
        'quantity' => 1,
    ],
    [
        'product' => 'Плюшевый медведь',
        'price' => 100,
        'quantity' => 3,
    ],
];

$sum = 0;

foreach ($basket as $position) {
    $sum += $position['price'] * $position['quantity'];
}

echo "В корзине товаров на сумму: $sum" . PHP_EOL;
// В корзине товаров на сумму: 550


echo PHP_EOL;

$colors = [
    'red' => 'красный',
    'blue' => 'синий',
    'white' => 'белый',
];

foreach ($colors as $code => $color) {
    echo "Цвет: $color. Код цвета: $code" . PHP_EOL;
}
// Цвет: красный. Код цвета: red
// Цвет: синий. Код цвета: blue
// Цвет: белый. Код цвета: white

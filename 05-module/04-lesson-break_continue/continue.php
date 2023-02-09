<?php

$products = [
    [
        'name' => 'Кружка',
        'price' => 120,
        'category' => 2,
    ],
    [
        'name' => 'Тетрис',
        'price' => 250,
        'category' => 1,
    ],
    [
        'name' => 'Плюшевый медведь',
        'price' => 100,
        'category' => 1,
    ],
];

$money = 150;
echo "Денег у клиента: $money" . PHP_EOL;

foreach ($products as $product) {
    if ($product['price'] > $money) {
        continue;
    }

    echo $product['name'] . ' за ' . $product['price'] . PHP_EOL;
}
// Денег у клиента: 150
// Кружка за 120
// Плюшевый медведь за 100


// Решение без оператора continue
foreach ($products as $product) {
    if ($product['price'] <= $money) {
        echo $product['name'] . ' за ' . $product['price'] . PHP_EOL;
    }
}

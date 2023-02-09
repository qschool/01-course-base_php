<?php

$bear = [
    'name' => 'Плюшевый медведь',
    'price' => 100,
    'category' => 'Игрушки',
];

$products = [
    [
        'name' => 'Тетрис',
        'price' => 250,
        'category' => 'Игрушки',
    ],
    [
        'name' => 'Кружка',
        'price' => 120,
        'category' => 'Посуда',
    ],
];

$products[] = $bear;

var_dump($products);

<?php

$catalog = [
    'categories' => [
        1 => [
            'id' => 1,
            'name' => 'Игрушки',
            'room' => 'Детская',
        ],
        2 => [
            'id' => 2,
            'name' => 'Посуда',
            'room' => 'Кухня',
        ],
        3 => [
            'id' => 3,
            'name' => 'Холодильники',
            'room' => 'Кухня',
        ],
    ],
    'products' => [
        [
            'name' => 'Тетрис',
            'price' => 250,
            'category' => 1,
        ],
        [
            'name' => 'Кружка',
            'price' => 120,
            'category' => 2,
        ],
        [
            'name' => 'Плюшевый медведь',
            'price' => 100,
            'category' => 1,
        ],
    ]
];

// array_keys|array_values

var_dump(array_keys($catalog['categories'][1])); // ['id', 'name', 'room'];
var_dump(array_values($catalog['categories'][1])); // [1, 'Игрушки', 'Детская'];

echo PHP_EOL . PHP_EOL;

// in_array|array_search
var_dump(in_array(100, $catalog['products'][0])); // false
var_dump(in_array('Кружка', $catalog['products'][1])); // true
var_dump(in_array('Кружка', $catalog['products'][2])); // false

var_dump(array_search(2, [1, 2, 3])); // 1
var_dump(array_search(20, [1, 2, 3])); // false

echo PHP_EOL . PHP_EOL;

// array_key_exists
var_dump(array_key_exists(0, $catalog)); // false
var_dump(array_key_exists('products', $catalog)); // true


echo PHP_EOL . PHP_EOL;

// array_unique|array_map
$rooms = array_map(fn ($item) => $item['room'], $catalog['categories']);
var_dump($rooms); // [1 => 'Детская', 2 => 'Кухня', 3 => 'Кухня']
var_dump(array_unique($rooms)); // [1 => 'Детская', 2 => 'Кухня']

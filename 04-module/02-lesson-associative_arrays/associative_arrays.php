<?php

$car = [
    'name' => 'Грузовик',
    'engine' => 'Дизель',
    'year' => 2022,
];

echo "Дата выпуска: {$car['year']}" . PHP_EOL;
// 2022

$car['color'] = 'Зеленый';
var_dump($car);
//array(4) {
//    'name' =>
//    string(16) "Грузовик"
//    'engine' =>
//    string(12) "Дизель"
//    'year' =>
//    int(2022)
//    'color' =>
//    string(14) "Зеленый"
//}

unset($car['color']);
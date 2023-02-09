<?php

$user = [
    'name' => 'Михаил',
    'age' => rand(10, 20),
    'money' => rand(100, 130),
];

$toys = [
    [
        'name' => 'Паровозик',
        'price' => 120,
        'minAge' => 16,
    ],
    [
        'name' => 'Воздушный змей',
        'price' => 110,
        'minAge' => 18,
    ],
];

function canBuyToy($user, $toy)
{
    if ($user['money'] < $toy['price']) {
        return false;
    }
    
    if ($user['age'] < $toy['minAge']) {
        return false;
    }
    
    return true;
}

echo sprintf('Денег %d, Возраст %s', $user['money'], $user['age']) . PHP_EOL;

foreach ($toys as $toy) {
    if (! canBuyToy($user, $toy)) {
        continue;
    }
    
    echo sprintf('%s может себе купить: %s за %d', $user['name'], $toy['name'], $toy['price']) . PHP_EOL;
}
// Денег 127, Возраст 20
// Михаил может себе купить: Паровозик за 120
// Михаил может себе купить: Воздушный змей за 110
// или
// Денег 100, Возраст 12


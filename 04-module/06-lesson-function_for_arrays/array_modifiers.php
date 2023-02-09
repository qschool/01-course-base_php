<?php
$items = [
    'first',
    'second',
    'third',
];

// array_pop|array_shift|array_push|array_unshift

$lastElement = array_pop($items);
var_dump($items, $lastElement); // ['first', 'second'], 'third

$firstElement = array_shift($items);
var_dump($items, $firstElement); // ['second'], 'first'

// Не используйте функцию array_push для добавления одного элемента, вместо нее лучше использовать оператор добавления элемента в массив
array_push($items, 'last', 'latest');
var_dump($items); // ['second', 'last', 'latest']

array_unshift($items, 'leader', 'after_leader');
var_dump($items); // ['leader', 'after_leader', 'second', 'last', 'latest']

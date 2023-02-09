<?php

$keyboardsKeys = [
    27 => 'Esc',
    13 => 'Enter',
    32 => 'Space',
];

var_dump($keyboardsKeys);
//array(3) {
//    [27] =>
//    string(3) "Esc"
//    [13] =>
//    string(5) "Enter"
//    [32] =>
//    string(5) "Space"
//}

$keyPressed = 27;
echo $keyboardsKeys[$keyPressed] . PHP_EOL;
// Esc

echo PHP_EOL;

$otherKeysArray = [
    3 => 'first',
    'second',
    'third'
];
var_dump($otherKeysArray);
//array(3) {
//    [3] =>
//    string(5) "first"
//    [4] =>
//    string(6) "second"
//    [5] =>
//    string(5) "third"
//}

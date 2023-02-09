<?php

$keyPressedCode = rand(32, 41);

if (rand(0, 4) > 2) {
    $keyPressedCode = 13;
}
if (rand(0, 4) > 2) {
    $keyPressedCode = 27;
}

echo "Код символа $keyPressedCode" . PHP_EOL;

switch ($keyPressedCode) {
    case 37:
        echo 'Двигаемся влево' . PHP_EOL;
        break;
    case 38:
        echo 'Двигаемся вверх' . PHP_EOL;
        break;
    case 39:
        echo 'Двигаемся вправо' . PHP_EOL;
        break;
    case 40:
        echo 'Двигаемся вниз' . PHP_EOL;
        break;
    case 27: // Esc
        echo 'Ввод отменен'  . PHP_EOL;
    case 13: // Enter
    case 32: // Space
        echo 'Ввод завершен' . PHP_EOL;
        break;
    default:
         echo 'Вы что-то вводите, неизвестное' . PHP_EOL;
}

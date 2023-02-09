<?php

for ($i = 0; $i < 5; $i++) {
    echo "* - $i" . PHP_EOL;
}
// * - 0
// * - 1
// * - 2
// * - 3
// * - 4

echo PHP_EOL;

$rating = 3;
for ($i = 1; $i <= 5; $i++) {
    echo $i <= $rating ? '*' : 'o';
}
// ***oo

echo PHP_EOL;

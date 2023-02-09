<?php

// Логическое И (&&) / конъюнкция

$orderPrice = 1000;
$byCourier = true;
$deliveryPrice = 0;

if ($orderPrice < 3000 && $byCourier) {
    $deliveryPrice = 300;
}

$sumPrice = $deliveryPrice + $orderPrice;

echo "Общая стоимость заказа: $sumPrice" . PHP_EOL;
// Общая стоимость заказа: 1300

// но
// $byCourier = false;
// Общая стоимость заказа: 1000

// Логическое ИЛИ (&&) / дизъюнкция

$passEnteringExam = true;
$passPreviousCourse = false;

if ($passEnteringExam || $passPreviousCourse) {
    echo 'Вы можете приступить к следующему учебному курсу' . PHP_EOL;
}
// Вы можете приступить к следующему учебному курсу


// Исключающее ИЛИ (xor)

$user1InChat = true;
$user2InChat = false;

$canInvite = $user1InChat xor $user2InChat;

// Логическое НЕ (!) / отрицание

$itRains = true;

if (! $itRains) {
    echo "Зонтик брать не нужно" . PHP_EOL;
}

echo (2 + 2 / 2) . PHP_EOL; // 3
echo ((2 + 2) / 2) . PHP_EOL; // 2

$a = $b = $c = true;

// ассоциативность
var_dump(($a && $b) && $c);
var_dump($a && ($b && $c));

// коммуникативность
var_dump($a && $b);
var_dump($b && $a);

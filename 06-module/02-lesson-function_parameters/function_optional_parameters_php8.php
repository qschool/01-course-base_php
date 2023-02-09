<?php

function calculateDiscountedPrice($price, $percent = 10, $increase = false)
{
    if ($increase) {
        $percent *= -1;
    }

    echo $price * (1 - $percent / 100) . PHP_EOL;
}

calculateDiscountedPrice(300); // 270
calculateDiscountedPrice(300, 20); // 240
calculateDiscountedPrice(300, increase: true); // 330

<?php

function calculateDiscountedPrice($price, $percent = 0)
{
    echo $price * (1 - $percent / 100) . PHP_EOL;
}

calculateDiscountedPrice(300); // 300
calculateDiscountedPrice(300, 10); // 270

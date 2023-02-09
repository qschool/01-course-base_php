<?php

function timeAddDays($days = 1)
{
    return time() + $days * 86400;
}

echo date('d.m', timeAddDays(rand(1, 3))) . PHP_EOL;

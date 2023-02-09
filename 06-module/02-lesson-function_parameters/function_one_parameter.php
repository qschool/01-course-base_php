<?php

function showNextDaysDate($days)
{
    echo date('d.m', time() + $days * 86400) . PHP_EOL;
}

showNextDaysDate(0);
showNextDaysDate(1);
showNextDaysDate(7);

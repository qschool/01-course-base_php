<?php

// 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, ...
function fib($n)
{
    if ($n <= 1) {
        return $n;
    }

    return fib($n - 1) + fib($n - 2);
}

echo fib(8) . PHP_EOL; // 21
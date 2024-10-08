<?php

function add(int $arg1, int $arg2) : int {
    return $arg1 + $arg2;
}

function sub(int $arg1, int $arg2) : int {
    return $arg1 - $arg2;
}

function mul(int $arg1, int $arg2) : int {
    return $arg1 * $arg2;
}

function div(int $arg1, int $arg2) : float | string {
    return ($arg2 != 0) ? ($arg1 / $arg2) : "error div 0";
}

// Проверяем, является ли файл основным
if (__FILE__ == realpath($_SERVER['SCRIPT_FILENAME'])) {
    $a = 6;
    $b = 2;

    echo "add($a, $b) = " . add($a, $b) . "\n";
    echo "sub($a, $b) = " . sub($a, $b) . "\n";
    echo "mul($a, $b) = " . mul($a, $b) . "\n";
    echo "div($a, $b) = " . div($a, $b) . "\n";
}

// docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/hw/hw1.php
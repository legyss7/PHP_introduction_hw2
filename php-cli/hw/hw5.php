<?php

// система запоминает в стек значение функции 
function power(float $val, float $pow) : float | string {
    if ($pow === 0) return 1.0;
    elseif ($pow < 0) {
        if ($val === 0) return "Ошибка!";
        return 1.0 / pow($val, -$pow);
    }
    return $val * pow($val, $pow - 1);        
}

echo power(2, 0) . "\n";
echo power(2, 1) . "\n";
echo power(2, 5) . "\n";
echo power(2, -5) . "\n";

// docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/hw/hw5.php
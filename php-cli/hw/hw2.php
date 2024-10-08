<?php

include 'hw1.php';

$a = 6;
$b = 2;

$operationArray = [
    "add",
    "sub",
    "mul",
    "div",
    " "
];

function mathOperation(
    int $arg1, 
    int $arg2, 
    string $operation
) : float | string {
    switch ($operation) {
        case "add":
            return add($arg1, $arg2);
        case "sub":
            return sub($arg1, $arg2);
        case "mul":
            return mul($arg1, $arg2);
        case "div":
            return div($arg1, $arg2);
        default:
            return "error";
    }
}

function mathOperation2(    
    int $arg1, 
    int $arg2, 
    string $operation
) : float | string {
    return match ($operation) {
        'add' => add($arg1, $arg2),
        'sub' => sub($arg1, $arg2),
        'mul' => mul($arg1, $arg2),
        'div' => div($arg1, $arg2),
        default => "error"
    };
}

function mathOperation3(    
    int $arg1, 
    int $arg2, 
    string $operation
) : float | string {
    if (function_exists($operation)) {
        return $operation($arg1, $arg2);
    } else {
        return "Нет такой операции.";
    }
}

// Проверяем, является ли файл основным
if (__FILE__ == realpath($_SERVER['SCRIPT_FILENAME'])) {

    echo "\n mathOperation" . PHP_EOL; 
    foreach ($operationArray as $operation) {
        echo "$a $operation $b = " . mathOperation($a, $b, $operation) . "\n";
    }

    echo "\n mathOperation2" . PHP_EOL;
    foreach ($operationArray as $operation) {
        echo "$a $operation $b = " . mathOperation2($a, $b, $operation) . "\n";
    }

    echo "\n mathOperation3" . PHP_EOL;
    foreach ($operationArray as $operation) {
        echo "$a $operation $b = " . mathOperation3($a, $b, $operation) . "\n";
    }
}


// docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/hw/hw2.php
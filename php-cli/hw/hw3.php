<?php

$array = [
    "Московская область" => [
        "Москва", 
        "Зеленоград", 
        "Клин"
    ],
    "Ленинградская область" => [
        "Санкт-Петербург", 
        "Всеволожск", 
        "Павловск", 
        "Кронштадт"
    ],
    "Рязанская область" => [
        "Рязань",
        "Касимов",
        "Скопин"
    ]
];

foreach ($array as $country => $cities) {
    echo " - " . $country . ":\n";
    foreach ($cities as $city) {
        echo " --- " . $city . "\n";
    }
}


// docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/hw/hw3.php
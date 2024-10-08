<?php

date_default_timezone_set('Asia/Bishkek');

// print_r(timezone_identifiers_list());

function getCurrentTimeWithDeclension() : string {
    $hours = (int)date('H');
    $minutes = (int)date('i');

    if($hours % 10 == 1 && $hours % 100 != 11) {
        $hoursText = "час";
    } elseif ($hours % 10 >= 2 && $hours % 10 <= 4 && ($hours % 100 < 10 || $hours % 100 >= 20)) {
        $hoursText = "часа";
    } else {
        $hoursText = "часов";
    }

    if($minutes % 10 == 1 && $minutes % 100 != 11) {
        $minutesText = "минута";
    } elseif ($minutes % 10 >= 2 && $minutes % 10 <= 4 && ($minutes % 100 < 10 || $minutes % 100 >= 20)) {
        $minutesText = "минуты";
    } else {
        $minutesText = "минут";
    }

    return $hours . " " . $hoursText . " " . $minutes . " " . $minutesText;
}

echo getCurrentTimeWithDeclension();


for ($i = 0; $i <= 59; $i++) 
    echo "$i " . get_word($i, "часов", "час", "часа") . "\n";

    function get_word($number, $word1, $word2, $word3) {
        if ($number > 10 && $number <= 20) return $word1;
        else {
            return match ($number % 10) {
                1 => $word2,
                2, 3, 4 => $word3,
                default => $word1,
            };
        }
    }

// docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/hw/hw6.php
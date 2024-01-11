<!-- CODEWARS N.21  EX:MULTIPLES OF 3 OR 5 -->

<?php

function sumMultiplesOf3And5($number) {
    if ($number < 0) {
        return 0;
    }

    $sum = 0;

    for ($i = 1; $i < $number; $i++) {
        if ($i % 3 == 0 || $i % 5 == 0) {
            $sum += $i;
        }
    }

    return $sum;
}
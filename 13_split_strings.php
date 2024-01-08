<!--  CODEWARS N.13  EX:SPLIT STRINGS -->

<?php

function splitString($str) {
    $result = [];
    $length = strlen($str);

    for ($i = 0; $i < $length; $i += 2) {
        $result[] = ($i + 1 < $length) ? substr($str, $i, 2) : $str[$i] . '_';
    }

    return $result;
}
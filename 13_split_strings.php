<!--  CODEWARS N.13  EX:SPLIT STRINGS
    
Complete the solution so that it splits the string into pairs of two characters. If the string contains an odd number of characters then it should replace the missing second character of the final pair with an underscore ('_').

Examples:

* 'abc' =>  ['ab', 'c_']
* 'abcdef' => ['ab', 'cd', 'ef'] -->

<?php

function splitString($str) {
    $result = [];
    $length = strlen($str);

    for ($i = 0; $i < $length; $i += 2) {
        $result[] = ($i + 1 < $length) ? substr($str, $i, 2) : $str[$i] . '_';
    }

    return $result;
}
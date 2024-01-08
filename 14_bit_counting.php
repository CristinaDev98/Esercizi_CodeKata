<!-- CODEWARS N.14  EX:BIT COUNTING  -->

<?php

function countBits($n) 
{
    $binary = decbin($n);
    $bitsCount = substr_count($binary, '1');
    return $bitsCount;
}
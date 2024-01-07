<!-- CODEWARS N.14  EX:BIT COUNTING
    
Write a function that takes an integer as input, and returns the number of bits that are equal to one in the binary representation of that number. You can guarantee that input is non-negative.

Example: The binary representation of 1234 is 10011010010, so the function should return 5 in this case -->

<?php

function countBits($n) 
{
    $binary = decbin($n);
    $bitsCount = substr_count($binary, '1');
    return $bitsCount;
}
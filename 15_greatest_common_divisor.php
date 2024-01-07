<!-- CODEWARS N.15  EX:GREATEST COMMON DIVISOR
    
Find the greatest common divisor of two positive integers. The integers can be large, so you need to find a clever solution.

The inputs x and y are always greater or equal to 1, so the greatest common divisor will always be an integer that is also greater or equal to 1. -->

<?php 

function mygcd($x, $y) {
    while ($y !== 0) {
        $temp = $y;
        $y = $x % $y;
        $x = $temp;
    }
    return $x;
}

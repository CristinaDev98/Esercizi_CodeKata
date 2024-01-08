<!-- CODEWARS N.15  EX:GREATEST COMMON DIVISOR -->

<?php 

function mygcd($x, $y) {
    while ($y !== 0) {
        $temp = $y;
        $y = $x % $y;
        $x = $temp;
    }
    return $x;
}

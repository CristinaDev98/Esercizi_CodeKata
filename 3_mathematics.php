<!--  CODEKATA N.3  EX:MATHEMATICS -->

<?php

function isPure($n) {
    $digitSum = array_sum(str_split($n));
    return $digitSum % 3 == 0;
}

$n = intval(trim(fgets(STDIN)));

$result = isPure($n);

echo ($result ? "yes" : "not") . "\n";
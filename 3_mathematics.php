<!--  CODEKATA N.3  EX:MATHEMATICS
    
You are given a task to tell whether the number is pure or not. A pure number is a number whose sum of digits is multiple of 3.

O(1) time and O(1) space

Input Description:
You are given a number n.

Output Description:
Print yes if it is pure else not

Sample Input :
13
Sample Output :
not -->

<?php

function isPure($n) {
    // faccio la somma delle cifre del numero
    $digitSum = array_sum(str_split($n));

    // controllo se la somma delle cifre è un multiplo di 3
    return $digitSum % 3 == 0;
}

$n = intval(trim(fgets(STDIN)));

// Controllo se il numero è puro
$result = isPure($n);

echo ($result ? "yes" : "not") . "\n";

?>
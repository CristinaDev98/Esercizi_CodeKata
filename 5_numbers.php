<!--  CODEKATA N.5  EX:NUMBERS
    
you are given with ‘arasu’ series(shown in example).You have to understand it and you will be given a number ‘n’ ,you have to print the series till n numbers.

Input Description:
You are given a number n;

Output Description:
Print series till nth number

Sample Input :
4
Sample Output :
2 5 10 17 -->


<?php

// Leggi il numero n dall'input
$n = intval(trim(fgets(STDIN)));

// Inizializza il primo numero della serie Arasu
$prevResult = 1;

// Stampa la serie fino al n-esimo numero
for ($i = 0; $i < $n; $i++) {
    // Aggiungo 1 per trovare il prossimo dispari
    echo $prevResult + ($i * 2) + 1 . " ";

    // Calcola il prossimo numero secondo la regola corretta della serie Arasu
    $prevResult = $prevResult + ($i * 2) + 1;
}

echo "\n";

?>
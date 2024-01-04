<!-- CODEKATA N.8  EX:BASICS
    
Write a code to get 2 integers A and N. Print the integer A, N times in separate line.

Input Description:
First line contains an integer A. Second line contains an Integer N.

Output Description:
Print the integer A, N times in a separate line.

Sample Input :
2 3
Sample Output :
2
2
2 -->

<?php
    // Leggi l'input da stdin
    $A = intval(trim(fgets(STDIN)));
    $N = intval(trim(fgets(STDIN)));

    // Stampa l'intero A, N volte
    for ($i = 0; $i < $N; $i++) {
        echo $A . PHP_EOL;  // metodo PHP_EOL per andare a capo
    }
?>
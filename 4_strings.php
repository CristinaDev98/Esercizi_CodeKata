<!--  CODEKATA N.4  EX:STRINGS
    
Given a string 'S' print the sum of weight of the String. A weight of character is defined as the ASCII value of corresponding character.

Input Description:
You are given a string ‘s’

Output Description:
Print weight

Sample Input :
abc
Sample Output :
294 -->


<?php

$inputStr = trim(fgets(STDIN));

// Funzione per calcolare la somma dei valori ASCII (pesi) dei caratteri in una stringa
function calculateWeight($inputStr) {
    $weight = 0;

    //Itero su ogni carattere della stringa e calcolo il valore ASCII
    for ($i = 0; $i < strlen($inputStr); $i++) {
        // La funzione ord() restituisce valore ASCII del primo carattere di una stringa
        $weight += ord($inputStr[$i]);
    }

    return $weight;
}

$weight = calculateWeight($inputStr);
echo $weight . "\n";

?>
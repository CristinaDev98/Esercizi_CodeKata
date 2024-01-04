<!-- CODEKATA N.6  EX:DYNAMIC PROGRAMMING
    
Given a string containing of length N , find the length of the maixmal palindrome formed from the string

The maximal palindrome can be formed as follows:

Say we are given the string : "abdbcda" . The length of the maximal palindrome will be 4 since the maximal palindrome will be abba  or adda.

We can form a palindrome by "linking up the characters at any two indices : if we have the maixmal palindrome as "abba" from the string "abdbcda" we link up the 'a' s at index 0 and at index 6

The we nest that linking by linking the 'b' s at index 2 and index 3. (NOTE: 0-based indexing is used here) 

Note that we form the palindrome by nesting links and we cannot have any links crossing each other. So from the string "abdbcda" the palindrome "abddba" is not valid since the links for d and the links for b "cross each other"  . More formally two links between indices i1 and i2 and between j1 and j2 are said to cross when either   j1<i1<j2<i2 or i1<j1<i2<j2 . A maximal palindrome is the palindrome of maximum length formed by nesting these links

Report the length of the largest maximal palindrome.  

Input Description:
The first and only line of input contains a string of at most 1000 characters

Output Description:
Output a single number : the length of the maximal palindrome formed. We can prove that this length is at least 1 .

Sample Input :
abddba

Sample Output :
4 -->


<?php

$s = "abddba";

// Chiamata alla funzione per contare i caratteri duplicati
$duplicates = countDuplicates($s);

// Stampa della lunghezza massima del palindromo
echo "La lunghezza max del palindromo è " . ($duplicates * 2);

// Funzione per contare i caratteri duplicati
function countDuplicates($inputString) {
    // Array per tenere traccia delle occorrenze di ogni carattere
    $occurrences = array();

    // Scorro ogni carattere nella stringa di input
    for ($i = 0; $i < strlen($inputString); $i++) {
        $char = $inputString[$i];

        // Aggiornare l'array delle occorrenze per il carattere corrente
        $occurrences[$char] = ($occurrences[$char] ?? 0) + 1;
    }

    // Contatore per i caratteri duplicati
    $duplicates = 0;

    // Scorrere ogni carattere nell'array delle occorrenze
    foreach ($occurrences as $key => $value) {
        // Se un carattere ha più di un'occorrenza, incrementa il contatore di duplicati
        if ($value > 1) {
            $duplicates++;
        }
    }

    // Restituire il numero di caratteri duplicati
    return $duplicates;
}
?>


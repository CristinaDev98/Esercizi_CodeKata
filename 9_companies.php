<!-- CODEKATA N.9  EX:COMPANIES

Given a number N and an array of N strings,Print yes, if all strings have atleast one vowel in them otherwise print no.
Input Size : N <= 1000
Sample Testcase :
INPUT
5
code
overload
vishal
sundar
anish
OUTPUT
yes -->


<?php
$number = intval(trim(fgets(STDIN)));
$array = [];

// Leggi le stringhe in un array
for ($i = 0; $i < $number; $i++) {
    $array[] = trim(fgets(STDIN));
}

$vowels = array('a', 'e', 'i', 'o', 'u');
$allVowel = true;

for ($i = 0; $i < count($array); $i++) {
    $stringa = $array[$i];
    
    // Controlla se la parola contiene almeno una vocale
    if (!ctype_alpha($stringa) || !strpbrk($stringa, implode('', $vowels))) {
        $allVowel = false;
        break; // Interrompo il ciclo se almeno una parola non ha vocali
    }
}

// Stampa "yes" se tutte le parole contengono almeno una vocale, altrimenti "no"
echo $allVowel ? "yes" : "no";
?>
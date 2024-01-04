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
$N = intval(trim(fgets(STDIN)));

// Leggi le stringhe in un array e verifica se contengono almeno una vocale         //se tutte le stringhe precedenti e quella attuale contengono almeno una vocale, il risultato sarà true, altrimenti sarà false.
$allVowel = array_reduce(array_map('trim', array_slice(file('php://stdin'), 1, $N)), fn($carry, $str) => $carry && strpbrk($str, 'aeiou') !== false, true);

// Stampa "yes" se tutte le stringhe contengono almeno una vocale, altrimenti "no"
echo $allVowel ? "yes" : "no";
?>
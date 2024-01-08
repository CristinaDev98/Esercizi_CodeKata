<!-- CODEKATA N.9  EX:COMPANIES  -->

<?php

$number = intval(trim(fgets(STDIN)));
$array = [];

for ($i = 0; $i < $number; $i++) {
    $array[] = trim(fgets(STDIN));
}

$vowels = array('a', 'e', 'i', 'o', 'u');
$allVowel = true;

for ($i = 0; $i < count($array); $i++) {
    $stringa = $array[$i];
    
    if (!ctype_alpha($stringa) || !strpbrk($stringa, implode('', $vowels))) {
        $allVowel = false;
        break; 
    }
}

echo $allVowel ? "yes" : "no";
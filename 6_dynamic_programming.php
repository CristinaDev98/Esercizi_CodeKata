<!-- CODEKATA N.6  EX:DYNAMIC PROGRAMMING -->

<?php

$s = "abddba";

$duplicates = countDuplicates($s);

echo "La lunghezza max del palindromo è " . ($duplicates * 2);

function countDuplicates($inputString) {
    $occurrences = array();

    for ($i = 0; $i < strlen($inputString); $i++) {
        $char = $inputString[$i];
        $occurrences[$char] = ($occurrences[$char] ?? 0) + 1;
    }

    $duplicates = 0;
    foreach ($occurrences as $key => $value) {
        if ($value > 1) {
            $duplicates++;
        }
    }
    return $duplicates;
}
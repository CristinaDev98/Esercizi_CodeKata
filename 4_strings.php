<!--  CODEKATA N.4  EX:STRINGS  -->

<?php

$inputStr = trim(fgets(STDIN));

function calculateWeight($inputStr) {
    $weight = 0;

    for ($i = 0; $i < strlen($inputStr); $i++) {
        $weight += ord($inputStr[$i]);
    }

    return $weight;
}

$weight = calculateWeight($inputStr);
echo $weight . "\n";
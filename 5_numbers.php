<!--  CODEKATA N.5  EX:NUMBERS -->

<?php

$n = intval(trim(fgets(STDIN)));

$prevResult = 1;

for ($i = 0; $i < $n; $i++) {
    echo $prevResult + ($i * 2) + 1 . " ";
    $prevResult = $prevResult + ($i * 2) + 1;
}

echo "\n";
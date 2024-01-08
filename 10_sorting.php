<!-- CODEKATA N.10  EX:SORTING  -->

<?php

list($m, $n) = array_map('intval', explode(' ', trim(fgets(STDIN))));

$matrix = [];

for ($i = 0; $i < $m; $i++) {
    $row = array_map('intval', explode(' ', trim(fgets(STDIN))));
    $matrix[] = $row;
}

$flattened = array_merge(...$matrix);

sort($flattened);

$sortedMatrix = array_chunk($flattened, $n);

for ($i = 0; $i < $m; $i++) {
    echo implode(' ', $sortedMatrix[$i]) . "\n";
}

<!-- CODEWARS N.19  EX:PAIR OF GLOVES -->

<?php

function numberOfPairs($gloves) {
    $colorCount = array_count_values($gloves);
    $pairCount = 0;

    foreach ($colorCount as $count) {
        $pairCount += intdiv($count, 2);
    }

    return $pairCount;
}
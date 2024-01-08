<!--  CODEKATA N.2  EX:ARRAY  -->

<?php

$n = intval(trim(fgets(STDIN)));
$ids = array_map('intval', explode(' ', trim(fgets(STDIN))));

function findCommonIds($n, $ids)
{
    $seenIds = [];
    $commonIds = [];

    foreach ($ids as $id) {
        if (in_array($id, $seenIds)) {
            $commonIds[] = $id;
        } else {
            $seenIds[] = $id;
        }
    }

    return empty($commonIds) ? -1 : array_unique($commonIds);
}

$result = findCommonIds($n, $ids);

if ($result == -1) {
    echo "-1\n";
} else {
    echo implode(' ', $result) . "\n";
}
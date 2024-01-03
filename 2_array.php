<!--  CODEKATA N.2  EX:ARRAY
    
You are given an array of ids of prisoners. The jail authority found that there are some prisoners of same id. Your task is to help the authority in finding the common ids.

Input Description:
First line contains a number ‘n’ representing no of prisoners. Next line contains n space separated numbers.

Output Description:
Print the ids which are not unique. Print -1 if all ids are unique

Sample Input :
7
1 1 11 121 131 141 98
Sample Output :
1 -->

<?php

$n = intval(trim(fgets(STDIN)));
$ids = array_map('intval', explode(' ', trim(fgets(STDIN))));

// Funzione per trovare gli id comuni
function findCommonIds($n, $ids)
{
    $seenIds = [];
    $uniqueIds = [];
    $commonIds = [];

    foreach ($ids as $id) {
        if (isset($seenIds[$id])) {
            $commonIds[$id] = true;
        } else {
            $seenIds[$id] = true;
            $uniqueIds[] = $id;
        }
    }
    // Restituisce -1 se non ci sono ID comuni, altrimenti restituisce gli ID comuni
    return empty($commonIds) ? -1 : array_keys($commonIds);
}

// Chiamo la funzione per trovare gli ID comuni
$result = findCommonIds($n, $ids);

// Stampo -1 se gli ID sono TUTTI unici, altrimenti stampo solo gli ID comuni.
if ($result == -1) {
    echo "-1\n";
} else {
    echo implode(' ', $result) . "\n";
}

?>

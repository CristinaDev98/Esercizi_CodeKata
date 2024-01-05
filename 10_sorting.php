<!-- CODEKATA N.10  EX:SORTING
    
Mr.Stark wants to order the employee ids, which are recorded in a 2D matrix, in ascending order. He wants to do it so as to allot a new id to a person who joins as a fresher. You are the CTO of the Stark industries and you are asked by Mr.Stark to sort the data.
 

Input Description:
Dimensions of the matrix m and n, followed by the elements of the matrix.

Output Description:
Matrix sorted in ascending order

Sample Input :
3 3
87 21 34
89 32 78
12 23 45
Sample Output :
12 21 23
32 34 45
78 87 89 -->

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

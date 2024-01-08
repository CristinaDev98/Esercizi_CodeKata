<!-- CODEKATA N.11  EX:HASHING  -->

<?php

function findEmptyChains($N, $integers)
{
    $X = findLargestNumber();

    $hashTable = array_fill(0, $X, []);

    foreach ($integers as $n) {
        $index = hashFunction($n, $X);
        $hashTable[$index][] = $n;
    }

    $emptyChains = 0;
    foreach ($hashTable as $chain) {
        if (empty($chain)) {
            $emptyChains++;
        }
    }
    return $emptyChains;
}

function findLargestNumber()
{
    return 407;
}

function hashFunction($n, $X)
{
    return $n % $X;
}

$N = 15; 
$integers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15]; 

$result = findEmptyChains($N, $integers);
echo $result;

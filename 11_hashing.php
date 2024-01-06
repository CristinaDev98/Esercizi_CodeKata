<!-- CODEKATA N.11  EX:HASHING
    
In "A Mathematicians Apology", G.H. Hardy wrote:
“There are just four numbers, after unity, which are the sums of the cubes of their digits”
Let the largest of those four numbers be X.
A hash function for performing separate chaining was defined as hash(n) := n mod X, where n is a whole number. Separate chaining was performed for N integers in an array A. Mrs. Leela was asked to find the number of empty chains from 0 to X-1 (both inclusive) after performing the hashing using separate chaining. Help her solve this mysterious question.
Separate chaining resources:
https://en.wikipedia.org/wiki/Hash_table#Separate_chaining_with_linked_lists
https://www.geeksforgeeks.org/hashing-set-2-separate-chaining/

Input Description:
The first line contains the number of integers N. The second line contains N space separated integers.

Output Description:
Print a single line containing an integer denoting the number of empty chains.

Sample Input :
15
0 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15
Sample Output :
392 -->

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

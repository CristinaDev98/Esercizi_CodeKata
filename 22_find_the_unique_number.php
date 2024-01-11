<!-- CODEWARS N.22  EX:FIND THE UNIQUE NUMBER -->

<?php

function find_uniq($arr) {
    $counts = array_count_values(array_map('serialize', $arr));
    
    foreach ($counts as $serializedNumber => $count) {
        $number = unserialize($serializedNumber);
        if ($count == 1) {
            return $number;
        }
    }

    return null;
}


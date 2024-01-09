<!-- CODEWARS N.18  EX:SIMPLE FUN #152:INVITE MORE WOMEN? -->

<?php

function invite_more_women($attendees) {
    $womenCount = 0;
    $menCount = 0;

    foreach ($attendees as $gender) {
        if ($gender === -1) {
            $womenCount++;
        } elseif ($gender === 1) {
            $menCount++;
        }
    }

    return $womenCount < $menCount;
}
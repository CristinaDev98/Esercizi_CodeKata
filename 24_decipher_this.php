<!-- CODEWARS N.24  EX:DECIPHER THIS! -->

<?php

function decipherThis($input) {
    $words = explode(" ", $input);

    foreach ($words as &$word) {

        preg_match('/^\d+/', $word, $matches);
        $charCode = $matches[0];

        $word = preg_replace('/^\d+/', chr($charCode), $word);

        $wordLength = strlen($word);
        if ($wordLength > 2) {
            $temp = $word[1];
            $word[1] = $word[$wordLength - 1];
            $word[$wordLength - 1] = $temp;
        }
    }

    return implode(" ", $words);
}
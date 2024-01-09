<!-- CODEWARS N.17  EX:TAP CODE TRANSLATION

 https://en.wikipedia.org/wiki/Tap_code -->

<?php

function tap_code_translation($text) {
    $polybiusSquare = array(
        'A' => '1 1', 'B' => '1 2', 'C' => '1 3', 'K' => '1 3', 'D' => '1 4', 'E' => '1 5',
        'F' => '2 1', 'G' => '2 2', 'H' => '2 3', 'I' => '2 4', 'J' => '2 5',
        'L' => '3 1', 'M' => '3 2', 'N' => '3 3', 'O' => '3 4', 'P' => '3 5',
        'Q' => '4 1', 'R' => '4 2', 'S' => '4 3', 'T' => '4 4', 'U' => '4 5',
        'V' => '5 1', 'W' => '5 2', 'X' => '5 3', 'Y' => '5 4', 'Z' => '5 5'
    );

    $encodedText = '';
    $text = strtoupper($text);

    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];
        if ($char == ' ') {
            $encodedText .= ' ';
        } else {
            $coordinates = explode(' ', $polybiusSquare[$char]);
            $encodedText .= str_repeat('.', $coordinates[0]) . ' ' . str_repeat('.', $coordinates[1]) . ' ';
        }
    }

    return rtrim($encodedText);
}
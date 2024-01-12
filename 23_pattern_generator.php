<!-- CODEWARS N.23  EX:PATTERN GENERATOR -->

<?php

function patternGenerator($N) {
    if ($N < 1) {
        return '';
    }

    $pattern = '';
    $mid = ceil($N / 2);

    for ($i = 1; $i <= $N; $i++) {
        $spaces = abs($mid - $i);

        if ($i <= $mid) {
            $pattern .= str_repeat(' ', $spaces) . 'x' . str_repeat(' ', ($i - 1) * 2) . "\n";
        } else {
            $pattern .= str_repeat(' ', $spaces) . 'x' . str_repeat(' o', ($N - $i)) . ' x' . str_repeat(' ', $spaces) . "\n";
        }
    }

    return $pattern;
}

$cek = [
    "",
    "x",
    " x\nx x\n x",
    "  x\n   x\nx o x\n x\n  x",
    "   x\n    x\n   o x\nx o o x\n x o\n  x\n   x",
    "    x\n     x\n    o x\n     o x\nx o x o x\n x o\n  x o\n   x\n    x",
    "     x\n      x\n     o x\n      o x\n     x o x\nx o x x o x\n x o x\n  x o\n   x o\n    x\n     x",
    "      x\n       x\n      o x\n       o x\n      x o x\n       x o x\nx o x o x o x\n x o x\n  x o x\n   x o\n    x o\n     x\n      x",
    "       x\n        x\n       o x\n        o x\n       x o x\n        x o x\n       o x o x\nx o x o o x o x\n x o x o\n  x o x\n   x o x\n    x o\n     x o\n      x\n       x",
    "        x\n         x\n        o x\n         o x\n        x o x\n         x o x\n        o x o x\n         o x o x\nx o x o x o x o x\n x o x o\n  x o x o\n   x o x\n    x o x\n     x o\n      x o\n       x\n        x"
];

foreach ($cek as $index => $each) {
    echo $each . "\n";
    echo "---------\n";
}

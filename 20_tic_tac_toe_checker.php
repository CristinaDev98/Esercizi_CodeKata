<!-- CODEWARS N.20  EX:TIC TAC TOE CHECKER -->

<?php

function is_solved($board) {
    foreach ($board as $row) {
        if (count(array_unique($row)) === 1 && $row[0] !== 0) {
            return $row[0];
        }
    }

    for ($i = 0; $i < 3; $i++) {
        $column = array_column($board, $i);
        if (count(array_unique($column)) === 1 && $column[0] !== 0) {
            return $column[0];
        }
    }

    $diagonal1 = [$board[0][0], $board[1][1], $board[2][2]];
    $diagonal2 = [$board[0][2], $board[1][1], $board[2][0]];

    foreach ([$diagonal1, $diagonal2] as $diagonal) {
        if (count(array_unique($diagonal)) === 1 && $diagonal[0] !== 0) {
            return $diagonal[0];
        }
    }

    foreach ($board as $row) {
        if (in_array(0, $row)) {
            return -1;
        }
    }

    return 0;
}


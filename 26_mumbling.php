<!-- CODEWARS N.26  EX:MUMBLING -->

<?php

function accum($s) {
     $result = '';

    for ($i = 0; $i < strlen($s); $i++) {
      
        $result .= strtoupper($s[$i]);

        $result .= str_repeat(strtolower($s[$i]), $i);

        
        if ($i < strlen($s) - 1) {
            $result .= '-';
        }
    }

    return $result;
}
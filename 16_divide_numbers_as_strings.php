<!-- CODEWARS N.16  EX:DIVIDE NUMBERS AS STRINGS -->

<?php

function largeDiv($dividend, $divisor) {
    $precision = 20; // 20 decimal places precision

    list($dividendInteger, $dividendFraction) = explode('.', $dividend) + array('', '');
    list($divisorInteger, $divisorFraction) = explode('.', $divisor) + array('', '');

    $numDividend = $dividendInteger . str_pad($dividendFraction, $precision, '0');
    $numDivisor = $divisorInteger . str_pad($divisorFraction, $precision, '0');

    $result = '';
    $remainder = '0';
    $precisionCount = 0;

    // Handle the sign of the result
    if ((strpos($dividend, '-') !== false) !== (strpos($divisor, '-') !== false)) {
        $result .= '-';
    }

    try {
        // Calculate the absolute values
        $absDividend = ltrim($numDividend, '-');
        $absDivisor = ltrim($numDivisor, '-');

        // Calculate the integer part
        $result .= bcdiv($absDividend, $absDivisor, 0);

        // Calculate the decimal part
        $remainder = bcmod($absDividend, $absDivisor);

        if (bccomp($remainder, '0') !== 0) {
            $result .= '.';

            while ($precisionCount < $precision) {
                $remainder = bcmul($remainder, '10');
                $result .= bcdiv($remainder, $absDivisor, 0);
                $remainder = bcmod($remainder, $absDivisor);

                if (bccomp($remainder, '0') === 0) {
                    break;
                }

                $precisionCount++;
            }
        }

        // Check if the decimal part is all zeros, remove it
        if (strpos($result, '.') !== false && preg_match('/^[.0]+$/', explode('.', $result)[1])) {
            $result = explode('.', $result)[0];
        }
    } catch (DivisionByZeroError $e) {
        throw new Exception("Error(Exeption in PHP");
    }

    return $result;
}

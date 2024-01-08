<!-- CODEKATA N.7  EX:ABSOLUTE BEGINNER  -->

<?php  
    $celsius = 12;
    $fahrenheit = (($celsius * 9) / 5) + 32;
    $formattedFahrenheit = number_format($fahrenheit, 2);
    
    echo "Temperature in Fahrenheit is: $formattedFahrenheit";

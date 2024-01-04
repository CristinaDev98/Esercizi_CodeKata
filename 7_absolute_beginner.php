<!-- CODEKATA N.7  EX:ABSOLUTE BEGINNER
    
You are given with a number A i.e. the temperature in Celcius. Write a program to convert this into Fahrenheit. 

Note: In case of decimal values, round-off to two decimal places.

Input Description:
A number is provided in Celcius as the input of the program.

Output Description:
The output shall be the temperature converted into Fahrenheit corresponding to the input value print up to two decimal places and round off if required.

Sample Input :
12
Sample Output :
53.60 -->


<?php  
    // Temp. celsius data in input
    $celsius = 12;
    // Conversione da celsius a fahrenheit
    $fahrenheit = (($celsius * 9) / 5) + 32;
    // Aggiungo funzione number_format per aggiungere i decimali
    $formattedFahrenheit = number_format($fahrenheit, 2);
    // Stampo risultato
    echo "Temperature in Fahrenheit is: $formattedFahrenheit";
?>
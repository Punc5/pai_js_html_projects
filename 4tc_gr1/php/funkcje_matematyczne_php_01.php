<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcje matematyczne PHP - część 1.</title>
</head>
<body>
    
</body>
</html>

<?php
    echo "Kamila Pierwszy Raz! <br>";
    printf("Kamila Drugi Raz!<br>");
    echo "Kamila Trzeci Raz! <br>";
    $zmienna = 5.5;
    $zmienna1 = "Tekst";
    $zmienna2 = true;
    $zmienna3 = -8;

    echo "wartość zmiennej = " .$zmienna.",zmienna2 =" .$zmienna1. ",zmienna3 =" .$zmienna2. ", zmienna4 =" .$zmienna3. "<br>";
    echo "wartość zmiennej = $zmienna ,zmienna2 = $zmienna1 ,zmienna3 = $zmienna2 , zmienna4 = $zmienna3 <br>";
    echo "wartość zmiennej = $zmienna ,zmienna2 = $zmienna1 ,zmienna3 = $zmienna2 , zmienna4 = $zmienna3 <br>";

    // Pierwszy sposób na komentarz
    /* Drugi sposób na komentarz */

    $zmienna_1 = 5.5; // liczba zmienno-przecinkowa
    $zmienna_2 = -8; // liczba
    $zmienna_3 = true; // true-false
    $zmienna_4 = "tekst"; // tekst

    // Math.round(x) - zaokraglenie x
    // Math.random(x, y) - losowa cyfra ze zbioru x i y
    // Napisz skrypt, w którym dla wylosowanej wartości z przedziału od 1 do 10 wyznaczy rozwiązanie poniższych wyrażeń:
    $x = rand(1,10);

    // a)
    $dzialanie_1 = (pow($x,2) - sqrt(pow($x+2,3))) / (2pow($x+2,2)-3$x);
    echo "Wynik działania 1. = " .$dzialanie_1. "<br>";

    // b)
    $dzialanie_2 = (abs(pow($x,2)-1)-pow(sin($x),2)) / ((2*$x+3)/(2pow($x,3)) - 3($x+1));
    echo "Wynik działania 2. = " .$dzialanie_2. "<br>";
?>
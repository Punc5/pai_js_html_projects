<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wprowadzenie do języka PHP</title>
</head>
<body>
    <?php
        echo "Mój pierwszy raz!";
        print("Mój drugi raz!");
        echo "Mój pierwszy raz!<br>";

        // Pierwszy sposób na komentarz
        /* Drugi sposób na komentarz */

        $zmienna_1 = 5.5; // liczba zmienno-przecinkowa
        $zmienna_2 = -8; // liczba
        $zmienna_3 = true; // true-false
        $zmienna_4 = "tekst"; // tekst

        echo "Wartość pierwszej zmiennej=".$zmienna_1.", Wartość drugiej zmiennej=".$zmienna_2.", Wartość trzeciej zmiennej=".$zmienna_3.", Wartość czwartej zmiennej=".$zmienna_4."<br>";
    ?>
</body>
</html>
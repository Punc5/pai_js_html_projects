<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcje matematyczne PHP - część 2.</title>
</head>
<body>
    <?php
        // Napisz skrypt, w którym dla wylosowanej wartości z przedziału od 1 do 10 wyznaczy rozwiązanie poniższych wyrażeń:
        $x = rand(1, 10);

        // a)
        $dzialanie_1 = (sqrt(pow($x + 1, 2) + 3) - 2 * $x) / (3 * pow($x, 2) * pow(pow($x, 2) + 1, 3) + (2 / 3) * $x + 1);
        echo "Wynik działania 1. = " .$dzialanie_1. "<br>";

        // b)
        $dzialanie_2 = ((sin($x) / (2 * $x)) + (8 * (pow($x, 3) - 1)) / (pow(2 * $x + 1, 8))) / ((abs(pow($x, 2) + 1)) - ((3 * pow($x, 3) - 1) / (2 * pow($x, 2) + 2)));
        echo "Wynik działania 2. = " .$dzialanie_2. "<br>";

        // c)
        $dzialanie_3 = (sqrt(2 * sqrt(pow(pow($x, 2) - 1, 2))) + 2 * pow($x, 2)) / (2 * abs(pow($x, 2) - 1)) - ((8 * (pow($x, 2) - 1)) / (3 * $x + 2));
        echo "Wynik działania 3. = " .$dzialanie_3. "<br>";

        // d)
        $dzialanie_4 = (5 * pow($x, 2) - pow(cos($x), 2) - 3 * $x) / ((5 * pow($x, 2) - 1) / (pow(3 * $x, $x - 1)) + 2 * pow($x, 2)) - 2 * pow($x, 3);
        echo "Wynik działania 4. = " .$dzialanie_4. "<br>";
    ?>
</body>
</html>

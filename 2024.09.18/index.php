<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zajęcia 5</title>
</head>
<body>
    <header>
        Korzystanie z biblioteki Math
    </header>
    <main>
        <?php
            // większość funkcji biblioteki Math jest dostępna bez konieczności wpisywania biblioteki
            // wypisanie liczby PI
            $liczbaPI=pi();
            echo $liczbaPI."<br>";
            //wybieranie największej i najmniejszej liczby
            echo(min(12,324,123,41,312,4123,41));
            echo "<br>";
            echo(max(12,324,123,41,312,4123,41));
            echo "<br>";

            //wartość bezwględną 
            $liczba=-923.2323;
            echo abs($liczba);
            echo "<br>";

            //zaokrąglenie liczby - standardowe tak jak normalnie liczymy
            echo round($liczba,2);
            echo "<br>";
            //zaokrąglenie w górę - zaokrąglamy do najbliższej liczby całkowitej większej od podanej liczby
            echo ceil($liczba);
            echo "<br>";
            //zaokrąglenie w dół - zaokrąglamy do najbliższej liczby całkowitej mniejszej od podanej liczby
            echo floor($liczba);
            echo "<br>";
            //potęgowanie
            echo pow(7,2);
            echo "<br>";
            //pierwiastkowanie
            echo sqrt(144);
            echo "<br>";
            //losowanie liczby pseudolosowej
            //liczby całkowite
            //losowanie z przedziału od 0 do 1 - liczby całkowite
            echo rand(0,1);
            echo "<br>";
            //losowanie z przedziału 20 - 60
            echo rand(20,60);
            echo "<br>";
            //losowanie dowolnej liczby całkowitej
            echo rand();
            echo "<br>";

        ?>
    </main>
    <footer>
        Stronę wykonał Przemysław Gemblaczyk
    </footer>
</body>
</html>
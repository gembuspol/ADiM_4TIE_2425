<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zajecia 1</title>
</head>
<body>
    <header>
        <h1>Zajęcia 1 - 04.09.2024</h1>
    </header>
    <main>
        <h2>Deklaracja zmiennych i ich wypisywanie</h2>
        <?php
        //deklaracja zmiennej
        $zmienna="imie nieobecnych to:";
        //wypisanie zmiennej na ekran
        echo $zmienna;
        //deklara stałych - nie można zmieniać wartości w trakcie
        define("PI","3,14");
        echo '<BR>'.PI;
        //próba zmiany wartości zmiennej i stałej
        $zmienna="Nie chcą się uczyć";
        //PI="3.1423432"; - tutaj występuję błąd unexpected token "=" 
        echo '<BR>'.$zmienna;
        echo '<BR>'.PI;
        ?>
        <h2>Deklaracja funkcji</h2>
        <?php
        //deklaracja funkcji z argumentem
        function kwadrat($zmienna){
            return $zmienna*$zmienna;
        }
        //wywołanie funkcji i zapisanie wyniku do zmniennej
        $wynik=kwadrat(12);
        //wypisanie zmiennej na ekran
        echo $wynik;
        //deklaracja funkcji która w ciele funkcji wypisze wynik
        function kwadrat2($a){
            echo $a*$a;
        }
        echo "<br>";
        //wywołanie funkcji kwadrat2
        kwadrat2(15);
        ?>
        
    </main>
    
</body>
</html>
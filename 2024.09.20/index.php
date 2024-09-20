<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zajęcia 6</title>
</head>
<body>
    <header>Losowanie liczb</header>
    <main>
        <h2> wylosowanie liczby całkowitej</h2>
        <?php
            echo rand(20,30)."<br>";
            // funkcja rand od wersji php 7 jest aliasem dla funkcji mt_rand
            echo mt_rand(20,30)."<br>";
        ?>
        <h2>Losowanie liczb z przecinkiem</h2>
        <?php
            $los=mt_rand(0,30);
            $liczbaZprzeciniek=$los/30;
            echo $liczbaZprzeciniek."<br>";
            echo "Zaokrąglona liczba do dwóch miejsc po przecinku".round($liczbaZprzeciniek,2)."<br>";
            echo "Losowanie liczb z przecinikiem z przedziału od 30 do 80<br>";
            //Aby wylosować liczbę z przecinkiem z jakieś przedzia u należy pomnożyć liczbę określającą początek przedziału oraz liczbę określającą koniec przedziału przez liczbę określającą dokładność liczby (miejsce po przecinku) np. chcemy aby liczba była do części setnych to mnożymy liczby razy 100. Losujemy liczbe z nowego przedziału (przemnożonych początku i końca). Następnie wylosowaną liczbę dzielimy przez liczbę przez którą mnożyliśmy krańce przedziału.
            // mt_getrandmax(); -zwraca największą wartość którą mozemy wylosować z danego przedziału
            $los=mt_rand(30*1000,80*1000);
            $wynik1=$los/1000;
            
            echo $wynik1."<br>";
        ?>
    </main>
</body>
</html>
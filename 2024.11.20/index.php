<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Połączenie z bazą</title>
</head>
<body>
    <header>
        <h2>Połączenie z bazą danych wędkowanie</h2>
    </header>
    <main>
        <?php
        //sprawdzamy czy połączyliśmy się z bazą danych
            if($polaczenie=mysqli_connect("localhost","root","","wedkowanie")){
                echo "Wedkowanie to najlepszy w świecie sport<br>";
                //zapisanie zapytania SQL do zmiennej
                $zapytanie="SELECT klient, dataZam FROM zamowienia";
                //wysłanie zapytania do bazy i zapisnaie wyniku do zmiennej
                //używamy funkcji mysqli_query do której jako parametry podajemy jako pierwsze zmienną w której przechowujemy połączenie z bazą danych, drugi parametr funkcji to zmienna zawierająca treść zapytania SQL
                $wynik=mysqli_query($polaczenie,$zapytanie);
                //wypisanie wyników z otrzmanej odpowiedzi z bazy danych
                //wyniki mogą być pojedynczym wierszem lub kilkoma wierszami dlatego aby wypisać wszystki użyjemy pętli while
                //użyjemy również funkcji mysqli_fetch_array, która jako parametr pobierze wynik zapytania z bazy danych i przkształci wynik jako pojedyńczy wiersdz tablicy. Wynik pobrania danych zapiszemy do zmiennej wiersz z której później będziemy odczytywać wartości
                echo "<ol>";
                while($wiersz=mysqli_fetch_array($wynik)){
                    echo "<li>".$wiersz['klient']."</li>";
                }
                echo "</ol>";
            }else{
                echo "Nie polączyliśmy się z bazą";
            }
            mysqli_close($polaczenie);
        ?>
    </main>
    
</body>
</html>
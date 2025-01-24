<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wyświetlenie zleceń po osobach</title>
</head>
<body>
    <header>Wyświetlanie zleceń według osób</header>
    <main>
        <!-- odbieranie danych z formularza -->
         <?php
            if($_SERVER["REQUEST_METHOD"]="POST"){
                echo "wysłali do nas!";
                if(isset($_POST["wybor"])){
                    echo "mamy ustawioną zmienna wybor na ".$_POST["wybor"];
                    $pol=mysqli_connect("localhost","root","","serwis_4tie_24_25");
                    $zapytanie2="SELECT idzgloszeniaSerwis, numerzgloszenia, imie, nazwisko, nazwa,  opisusterki,opisRozwiazania FROM zgloszeniaserwis, sprzet, klient WHERE zgloszeniaserwis.idklienta=klient.idklient AND zgloszeniaserwis.idsprzet=sprzet.idsprzet AND zgloszeniaserwis.idKlienta=".$_POST["wybor"];
                    $wynik=mysqli_query($pol,$zapytanie2);
                    echo "<table>";
                    echo "<tr><th>idzgloszenia</th><th>numerZgloszenia</th><th>imie klienta</th><th>nazwisko klienta</th><th>nazwa Sprzęt</th><th>opisUsterki</th><th>opisRozwiazania</th></tr>";
                    while($wiersz=mysqli_fetch_array($wynik)){
                        echo "<tr>";
                        echo "<td>$wiersz[0]</td><td>$wiersz[1]</td><td>$wiersz[2]</td><td>$wiersz[3]</td><td>$wiersz[4]</td><td>$wiersz[5]</td><td>$wiersz[6]</td>";
                        echo "</tr>";
                    } 
                    echo "</table>";
                    mysqli_close($pol);
                    }
            }
         ?>
    </main>
    
</body>
</html>
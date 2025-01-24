<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wyświetlanie danych w tabeli</title>
</head>
<body>
    <header><h1>Wypisywanie danych z bazy</h1></header>
    <main>
        <!-- Chcemy wypisać dane z bazy danych serwis 4tie dotyczące zgłoszeń
        Podzielimy pracę na kilka części
        1. Wypiszemy całą zawartośc tabeli zgloszeniaserwis w formie tabeli
        2. Wypiszemy zawartość tabeli zgloszenia serwis wraz z nazwami sprzetu i danymi zglaszających
        3. Dodamy filtry do tabeli tak aby wyświetlały się zgłoszenia po danych zglaszającego 
        4. Przeniessiemy dane do logowania do bazy danych do zewnętrznego pliku
        -->
        <?php
            $polaczenia=mysqli_connect('localhost','root','','serwis_4tie_24_25');
            //sprawdzamy czy wystapily bledy z polaczeniem z baza danych
            if ($polaczenia){
                //dziala polaczenie z baza danych
                // wyswietlamy dane w tabeli dlatego teraz wypisujemy dane z bazy
                echo "<table>";
                echo "<tr><th>idzgloszenia</th><th>numerZgloszenia</th><th>idKlienta</th><th>idSprzet</th><th>opisUsterki</th><th>opisRozwiazania</th></tr>";
                $zapytanie="SELECT * FROM zgloszeniaserwis";
                $wynik=mysqli_query($polaczenia,$zapytanie);
                
                while($wiersz=mysqli_fetch_array($wynik)){
                    echo "<tr>";
                    echo "<td>$wiersz[0]</td><td>$wiersz[1]</td><td>$wiersz[2]</td><td>$wiersz[3]</td><td>$wiersz[4]</td><td>$wiersz[5]</td>";
                    echo "</tr>";
                }
                
                echo "</table>";

                // wypisanie tabeli razem z imieniem i nazwiskiem oraz nazwą sprzętu
                echo "<table>";
                echo "<tr><th>idzgloszenia</th><th>numerZgloszenia</th><th>imie klienta</th><th>nazwisko klienta</th><th>nazwa Sprzęt</th><th>opisUsterki</th><th>opisRozwiazania</th></tr>";
                
                $zapytanie2="SELECT idzgloszeniaSerwis, numerzgloszenia, imie, nazwisko, nazwa,  opisusterki,opisRozwiazania FROM zgloszeniaserwis, sprzet, klient WHERE zgloszeniaserwis.idklienta=klient.idklient AND zgloszeniaserwis.idsprzet=sprzet.idsprzet";
                $wynik=mysqli_query($polaczenia,$zapytanie2);
                
                while($wiersz=mysqli_fetch_array($wynik)){
                    echo "<tr>";
                    echo "<td>$wiersz[0]</td><td>$wiersz[1]</td><td>$wiersz[2]</td><td>$wiersz[3]</td><td>$wiersz[4]</td><td>$wiersz[5]</td><td>$wiersz[6]</td>";
                    echo "</tr>";
                }
                
                echo "</table>";


                mysqli_close($polaczenia);

            }else{
                echo mysqli_connect_errno();
            }
            
            
        ?>
    </main>
    <section>
        <form method="POST" action="osoby.php">
            <fieldset>
                <legend>Wybieranie osoby</legend>
                <select name="wybor">
                    <?php
                        $polaczenie=mysqli_connect("localhost","root","",'serwis_4tie_24_25');
                        $zapytanie3="SELECT imie, nazwisko,idklient FROM klient";
                        $wynik=mysqli_query($polaczenie,$zapytanie3);
                        while($wiersz=mysqli_fetch_array($wynik)){
                            echo '<option value='.$wiersz["idklient"].'>'.$wiersz["imie"].' '.$wiersz["nazwisko"].'</option>';
                        }
                        mysqli_close($polaczenie);
                    ?>
                </select>
                <button type="submit">Zobacz wyniki</button>
                <button type="reset">Reset</button>
            </fieldset>
        </form>
    </section>
    <footer>
        <p>Stronę przygotował XYZ</p>
    </footer>
</body>
</html>
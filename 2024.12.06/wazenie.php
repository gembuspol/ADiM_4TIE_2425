<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ważenie samochodów ciężarowych</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <section id="baner1">
        <h1>Ważenie pojazdów we wrocławiu</h1>
    </section>
    <section id="baner2">
        <img src="obraz1 (2).png" alt="waga">
    </section>
    <section id="lewy">
        <h2>Lokalizacje wag</h2>
        <?php
            $polaczenie=mysqli_connect("localhost","root","","wazenietirow");
            $zapytanie="SELECT ulica FROM lokalizacje";
            $wynikZapytania=mysqli_query($polaczenie,$zapytanie);
            echo "<ol>";
            while($wiersz=mysqli_fetch_array($wynikZapytania)){
                echo "<li>ulica ".$wiersz['ulica']."</li>";
            }
            echo "</ol>";
            mysqli_close($polaczenie);
        ?>

        <h2>Kontakt</h2>
        <a href="wazenie@wroclaw.pl" target="_blank">Napisz</a>
    </section>
    <section id="srodkowy">
        <h2>Alerty</h2>
        <table>
            <tr>
                <th>Rejestracja</th>
                <th>ulica</th>
                <th>waga</th>
                <th>dzien</th>
                <th>czas</th>
            </tr>

            <?php
                $polaczenie=mysqli_connect("localhost","root","","wazenietirow");
                $zapytanie2="SELECT rejestracja, waga, dzien, czas, ulica FROM wagi INNER JOIN lokalizacje ON wagi.lokalizacje_id=lokalizacje.id WHERE waga>5";
                $wynikZapytania2=mysqli_query($polaczenie,$zapytanie2);
                
                while($wiersz=mysqli_fetch_array($wynikZapytania2)){
                    echo "<tr><td>".$wiersz['rejestracja']."</td><td>".$wiersz['ulica']."</td><td>".$wiersz['waga']."</td><td>".$wiersz['dzien']."</td><td>".$wiersz['czas']."</td></tr>";
                }
                
                mysqli_close($polaczenie);
            ?>
                
        </table>
        <?php
                $polaczenie=mysqli_connect("localhost","root","","wazenietirow");
                $liczba=rand(1,10);
                $zapytanie3="INSERT INTO wagi VALUES(null,5,$liczba,'DW12345',date('Y-m-d'),date('H:i'))";
                $wynikZapytania3=mysqli_query($polaczenie,$zapytanie3);
                header('refresh: 10;');
                mysqli_close($polaczenie);
            ?>
    </section>
    <section id="prawy">
        <img src="obraz2.jpg" alt="tir">
    </section>
    <footer>
        <p>Stronę wykonał 06305412</p>
    </footer>
</body>
</html>
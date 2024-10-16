<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularze metoda POST</title>
</head>
<body>
    <header>Formularze przesyłane metodą POST</header>
    <main>
        <form action="index.php" method="POST">
            <label for="imie">Podaj imie</label>
            <input type="text" id="imie" name="imie">
            <br>
            <label for="wiek">Podaj swój wiek</label>
            <input type="number" id="wiek" name="wiek">
            <br>
            <select name="marka" id="marka">
                <option value="Fiat">Fiat</option>
                <option value="Ford">Ford</option>
                <option value="BMW">BMW</option>
                <option value="Renault">Renault</option>
            </select>
            <input type="submit" value="Zatwierdź">
        </form>
        <?php
            // sprawdzanie czy na stronie została ustawiona metoda POST
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                echo "Jest ustawiona metoda POST";
                //sprawdzanie czy jest wpisane w formularzu imie, jeżeli tak to wypisujemy odpowiedni komunikat
                if (empty($_POST["imie"])){
                    echo "<br> Nie wpisano nic do imienia";
                }else{
                    echo "<br> Podane imię to ".$_POST["imie"];
                }
                //sprawdzenie czy podano wiek
                if(empty($_POST["wiek"])){
                    echo "<br> Nie wpisano nic do wieku osoby";
                }else{
                    echo "<br> Podany wiek to ".$_POST["wiek"];
                }
                //sprawdzenie czy wybrano odowiednią markę
                if(empty($_POST["marka"])){
                    echo "<br> Nie wybrano marki samochodu";
                }else{
                    echo "<br> Podana marka to: ".$_POST["marka"];
                }
            }else{
                echo "Nie ma ustawionej metody POST";
            }
        ?>
    </main>
    <footer>Stronę wykonał Przemek</footer>
    
</body>
</html>
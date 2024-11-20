<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
</head>
<body>
    <header>
        <p>Logowanie z wykorzystaniem sesji</p>
    </header>
    <main>
        <form method="POST">
            <fieldset>
                <legend>Logowanie</legend>
                <label for="login">Podaj login: </label>
                <input type="text" name="login" id="login" required>
                <br>
                <label for="haslo">Podaj Hasło: </label>
                <input type="password" name="haslo" id="haslo" required>
                <br><input type="submit" value="Loguj">
            </fieldset>
        </form>
    </main>
    <?php
        //sprawdzanie czy dane przesłane z formularza są poprawne i można sie zalogować
        if($_SERVER['REQUEST_METHOD']=="POST"){
            if(empty($_POST["login"]) || empty($_POST['haslo'])){
                echo "Podaj wszystkie dane";
            }else{
                $login=$_POST["login"];
                $haslo=$_POST["haslo"];
                if($login=="kamil" && $haslo=="Cygan123@"){
                    echo "<br><br> jesteśmy zalogowani";
                    // poprawnie się zalogowaliśmy 
                    //ustawiany że jesteśmy zalogowani - dodajemy zmienna do sesji
                    $_SESSION['zalogowany']=true;
                }else{
                    echo "<br><br> Błędny login lub hasło";
                }
            }
        }else{
            echo "Nie podano danych";
        }
    ?>
    <footer>
        <p>Tutaj pojawi się komunikat czy jesteś zalogowany</p>
        <p>
            <?php
            if(isset($_SESSION['zalogowany'])){
                if($_SESSION['zalogowany']){
                    echo "Jesteś zalogowany";
                }else{
                    echo "Nie jesteś zalogowany";
                }
            }
            ?>
        </p>
        <p>Link do strony wylogowania<a href="wyloguj.php">WYLOGUJ</a></p>
    </footer>
</body>
</html>
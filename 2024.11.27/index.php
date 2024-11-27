<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz i baza danych</title>
</head>
<body>
    <header>Strona pobiera dane z bazy i wyśietla w polu selekt</header>
    <section>
        <form action="index.php" method="POST">
        <select name="wybor">
            <?php
                $polaczenie=mysqli_connect("localhost","root","","dane");
                $zapytanie1="SELECT tytul FROM filmy";
                $wynik=mysqli_query($polaczenie,$zapytanie1);
                while($wiersz=mysqli_fetch_array($wynik)){
                    echo "<option value='".$wiersz['tytul']."'>".$wiersz['tytul']."</option>";
                }
                mysqli_close($polaczenie);
            ?>
        </select>
        <button type="submit">Pokaż reżysera</button>
        </form>
    </section>
    <section>
        <?php
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $wybor=$_POST['wybor'];
            echo $wybor;
        }
        ?>
    </section>
</body>
</html>
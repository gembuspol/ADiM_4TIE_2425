<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wysyłanie danyc do bazy danych</title>
</head>
<body>
    <header>
        <h2>Dodawanie danych do bazy</h2>
    </header>
    <main>
        <form action="index.php" method="POST">
            <label for="imie">Podaj imię</label>
            <input type="text" id="imie" name="imie">
            <br>
            <label for="nazwisko">Podaj nazwisko</label>
            <input type="text" id="nazwisko" name="nazwisko">
            <br>
            <label for="email">Podaj e-mail</label>
            <input type="email" id="email" name="email">
            <br>
            <input type="submit" value="Wyślij dane do bazy">
        </form>
    </main>
    <section>
        <?php
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $imie=$_POST['imie'];
                $nazwisko=$_POST['nazwisko'];
                $email=$_POST['email'];
                // połączenie z bazą danych
                $polaczenie=mysqli_connect("localhost","root","","sakila");
                $zapytanie="INSERT INTO staff(first_name,last_name,email,store_id, address_id) VALUES('$imie','$nazwisko','$email',1,1)";
                $wynik=mysqli_query($polaczenie,$zapytanie);

                mysqli_close($polaczenie);
            }
        ?>
    </section>
</body>
</html>
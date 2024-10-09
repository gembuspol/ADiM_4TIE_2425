<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularze - przesyłanie danych</title>
</head>
<body>
    <header><h1>Formularze pobieranie danych</h1></header>
    <main>
        <form action="index.php" target="_blank" method="GET">
            <label for="imie">Podaj imię</label>
            <input type="text" id="imie" name="imie">
            <br>
            <label for="wiek">Podaj wiek</label>
            <input type="number" id="wiek" name="wiek">
            <br>
            <input type="submit" value="Zapisz dane">

        </form>
    </main>
    <footer>
        <p>Podałeś imię: <?php echo $_GET["imie"] ?></p>
        <p>Podałeś jako wiek: <?php echo $_GET["wiek"]?></p>
    </footer>
    
</body>
</html>
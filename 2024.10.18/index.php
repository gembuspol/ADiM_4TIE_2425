<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadania - zajęcia 13</title>
</head>
<body>
    <section>
        <form action="formularz.php" method="post">
            <label for="auto">Wybierz pojazd:</label>
            <select id="auto" name="auto">
                <option value="Ford Ka">Ford Ka</option>
                <option value="Fiat Punto">Fiat Punto</option>
                <option value="Mazda CX-5">Mazda CX-5</option>
                <option value="Suzuki Ignis">Suzuki Ignis</option>
            </select>
            <br>
            <label for="rocznik">Podaj rocznik samochodu</label><input type="number" id="rocznik" name="rocznik"><br>
            <label for="kolor">Podaj kolor samochodu</label><input type="text" id="kolor" name="kolor"><br>
            <label for="przebieg">Podaj przebieg samochodu</label><input type="number" id="przebieg" name="przebieg"><br>
            <input type="submit" value="Zatwierdź dane">
        </form>
    </section>
</body>
</html>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz przesyłanie POST</title>
</head>
<body>
    <main>
        <form action="formularz.php" method="POST">
            <fieldset>
                <legend>Formularz</legend>
                <label for="Temat">Podaj w formularzu dwie liczby, które określają boki prostokąta. My obliczymy jego obwód, pole oraz podamy czy jego pole jest większe 15</label>
                <br>
                <label for="liczba1">Podaj pierwszą liczbę</label>
                <input type="number" id="liczba1" name="liczba1">
                <br>
                <label for="liczba2">Podaj drugą liczbę</label>
                <input type="number" id="liczba2" name="liczba2">
                <br>
                <input type="reset" value="Resetuj">
                <input type="submit" value="Prześlij dane">
            </fieldset>
        </form>
    </main>
</body>
</html>
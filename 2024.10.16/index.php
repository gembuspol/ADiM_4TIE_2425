<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularze przesyłanie danych</title>
</head>
<body>
    <header>
        <h1>Przesyłanie danych za pomocą formularza</h1>
    </header>
    <main>
        <form action="formularz.php" method="GET">
            <fieldset>
                <legend>Wprowadzanie danych</legend>
                <label for="pilkarz">Podaj imię nazwisko piłkarza</label>
                <input type="text" id="pilkarz" name="pilkarz">
                <label for="narodowosc">Podaj narodowość</label>
                <select id="narodowosc" name="narodowosc">
                    <option value="Argentyna">Argentyna</option>
                    <option value="Polska">Polska</option>
                    <option value="Chorwacja">Chorwacja</option>
                    <option value="Portugalia">Portugalia</option>
                </select>
                <!--  -->
                <input type="submit" value="Prześlij dane">
            </fieldset>
        </form>
    </main>
</body>
</html>
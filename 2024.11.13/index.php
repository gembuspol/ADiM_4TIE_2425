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
                <input type="text" name="login" id="login" require>
                <br>
                <label for="haslo">Podaj Hasło: </label>
                <input type="text" name="haslo" id="haslo" require>
            </fieldset>
        </form>
    </main>
    <footer>
        <p>Tutaj pojawi się komunikat czy jesteś zalogowany</p>
    </footer>
</body>
</html>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciasteszka i formularz</title>
</head>
<body>
    <form method="GET" action="index.php">
        <label for="liczba1">Podaj pierwszą liczbę</label>
        <input type="number" id="liczba1" name="liczba1">
        <br>
        <label for="liczba2">Podaj drugą liczbę</label>
        <input type="number" id="liczba2" name="liczba2">
        <br>
        <input type="submit" value="Zapisz">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="GET"){
            if(empty($_GET["liczba1"]) || empty($_GET["liczba2"])){
                echo "Podaj wszystkie dane";
            }else{
                echo "mamy dane";
            }
        }else{
            echo "Brak danych";
        }
    ?>
</body>
</html>
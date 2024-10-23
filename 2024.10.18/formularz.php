<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz - odebranie danych</title>
</head>
<body>
    <?php
        if($_SERVER['REQUEST_METHOD']=="POST"){
            //tutaj wpisujemy odpowiedź gdy jest warunek spełniony - "odpowiedź TAK"
            if(empty($_POST['auto'])){
                echo "Nie podano modelu samochodu <br>";
            }else{
                echo "Marka i model: ".$_POST['auto'];
            }
            if(empty($_POST['rocznik'])){
                echo "Nie podano rocznika samochodu <br>";
            }else{
                echo "Rocznik samochodu: ".$_POST['rocznik'];
            }
        }else{//tutaj wypisujemy sobie odpowiedź w przeciwnym wypadku - "odpowiedź NIE"
            echo "Brak danych";
        }

    ?>
    
</body>
</html>
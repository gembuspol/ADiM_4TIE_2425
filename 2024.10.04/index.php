<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zmienne globalne</title>
</head>
<body>
    <?php
        $x=123;
        function funkcja1(){
            // brak deklaracji global spowoduje błąd programu
            global $x;
            echo $x;
        }
        funkcja1();
        echo "<br>";
        // wyświetlenie zmiennej globalnej
        echo $GLOBALS["x"];
        echo "<br>";
        // zmienne serwera
        // wyświetlenie ścieżki pliku względem serwera
        echo $_SERVER['PHP_SELF'];
        echo "<br>";
        // wyświetlenie nazwy serwera - w naszym przypadku localhost
        echo $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo $_SERVER['HTTP_HOST'];
        echo "<br>";
        //ścieżka adresu strony razem z serwerem
        echo $_SERVER['HTTP_REFERER'];
        echo "<br>";
        //wyśiwetla rodzaj przeglądarki
        echo $_SERVER['HTTP_USER_AGENT'];
        echo "<br>";
        //wyśiwetla nazwę skryptu
        echo $_SERVER['SCRIPT_NAME'];
        echo "<br>";
        //wyśiwetla czy do strony został przekierowany formularzi i wyświetla GET lub POST oraz COOKIES
        echo $_SERVER['REQUEST_METHOD'];
        echo "<br>";
        //sprawdzenie czy do strony został wysłany formularz metodą POST
        if ($_SERVER['REQUEST_METHOD']=="POST"){
            echo "metoda POST";
        }else{
            echo "inna metoda";
        }
    ?>
    
</body>
</html>
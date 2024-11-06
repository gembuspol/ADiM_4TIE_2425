<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <?php
    // zapisywanie ciasteczka z wykorzystaniem funkcji setcookie(nazwa,wartosc, waznosc,sciezka)
    //jako parametry funkcji podajemy: nazwa - nazwa ciasteczka po którym można się do niego odwołać; wartosc - zapisane dane w ciasteczku; waznosc - długość życia, czas trwania, czas przechowywania - określamy jak długo ma istnieć ciasteczko - podajemy date i godzinę wygaśniecia wartość, można użyć funkcji time() która zwróci aktualną datę i czas; ścieżka - określa miejsce zapisu ciasteczka w strukturze
    //aby ciasteczko wygasło za 1 dzień użyjemy zapisu: time()+86400 - 86400 - ilość sekund w ciągu jednego dnia
    //setcookie("karta","124234234",time()+86400,"/");
    setcookie("karta","8888xsdf453",time()+(86400*30),"/");
    if(isset($_COOKIE["karta"])){
        echo "Wartość ciasteczka jest równa: ".$_COOKIE['karta'];
    }else{
        echo "brak ciasteczka";
    }
    //liczenie ilości ciasteczek
    $ilosc=count($_COOKIE);
    echo "<br>Liczba plików cookie: ".$ilosc;
    ?>
    
</body>
</html>
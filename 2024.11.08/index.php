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
                // echo "mamy dane";
                $liczba1=(int)$_GET["liczba1"];
                $liczba2=(int)$_GET["liczba2"];
                $tekst="";
                for($i=0;$i<$liczba1;$i++){
                    $tekst=$tekst."---".$i;
                }
                setcookie("petla",$tekst,time()+84600,"/");
                //sprawdzanie ile ma dzielników dana liczba
                //podzielmy liczbe2 na pół i zaokrąglimy w górę
                $polowaLiczba2=ceil($liczba2/2);
                //ustalamy ilosć dzielników na 0
                $iloscdzielnikow=0;
                //za pomocą pętli for sprawdzamy każdą liczbę czy jest dzielnikiem podaje liczby - wykorzystujemy dzielenie modulo, gdy liczba jest podzielna to zwiększamy ilość dzielników
                for($j=1;$j<=$polowaLiczba2;$j++){
                    if(($liczba2 % $j) ==0){
                        $iloscdzielnikow++;
                        
                    }
                }
                echo "<br> dzielniki: ".$iloscdzielnikow."<br>";
                if(isset($_COOKIE["nowa"])){
                    $tmp=$_COOKIE['nowa'];
                    setcookie("stara",$tmp,time()+84600,"/");
                    setcookie("nowa",$iloscdzielnikow,time()+84600,"/");
                }else{
                    setcookie("nowa",$iloscdzielnikow,time()+84600,"/");
                }
            }
        }else{
            echo "Brak danych";
        }
        if(isset($_COOKIE["petla"])){
            echo "Wartość ciasteczka jest równa: ".$_COOKIE['petla'];
        }else{
            echo "brak ciasteczka";
        }
        if(isset($_COOKIE["stara"])){
            echo "<br>Ilość dzielników poprzedniej liczby: ".$_COOKIE['stara'];
            echo "<br><br>Ilość dzielników obecnej liczby: ".$_COOKIE['nowa'];
        }else{
            echo "<br><br>Ilość dzielników obecnej liczby: ".$_COOKIE['nowa'];
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zajęcia 4</title>
</head>
<body>
    <?php
    // deklaracja tablicy asoscjacyjne
    $tablica=array("imie"=>"Kamil", "nazwisko"=>"Strzelecki", "rozmiarButa"=>44,"miejscowosc"=>"Konczyce Male");
    print_r($tablica);
    // pętla foreach
    echo "<h1>Pętla foreach</h1>";
    foreach($tablica as $a){
        echo "$a <br>";
    }
    echo "<br>Wypisanie klucza i wartości";
    foreach($tablica as $klucz => $wartosc){
        echo "Klucz $klucz ma wartosc: $wartosc <br>";
    }
    echo "<h1>Funkcja warunkowa</h1>";
    // wykorzystanie if do działania strony
    function deszcz($kropla){
        // sprawdzamy czy są krople
        if($kropla>0){
            echo "<h2> Pada deszcz</h2>";
        }
    }
    echo "<br> Wywoływanie funkcji";
    deszcz(5);
    deszcz(-5);
    deszcz(0);
    function kebab($kasa){
        if($kasa>23){
            echo "Kupujemy jedzenie! <br>";
        } else {
            echo "Kupujemy coś tańszego <br>";
        }
    }
    //wywołanie funkcji kebab
    kebab(30);
    kebab(18);
    kebab(9.99);
    ?>
    
</body>
</html>
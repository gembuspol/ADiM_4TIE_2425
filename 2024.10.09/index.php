<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Powtórzenie</title>
</head>
<body>
    <?php
        $imie="Maks";
        function wyswietlImie($imie){
            echo $imie;
        }
        wyswietlImie($imie);
        // tworzenie tablicę
        $tablica1=["Dawid","Lukasz","Kevin"];
        $tablica2=array("Muller","Leza","Jergas");
        echo $tablica1;
        print_r($tablica2);
        //dodawnie elementów
        array_unshift($tablica2,"Dymura");
        echo "<br>";
        print_r($tablica2);
        //tablica asoscjacyjna
        $tablica3=array("imie"=>"Kamil", "nazwisko"=>"Strzelecki","miejscowosc"=>"Kończyce Małe" );
        echo "<br>";
        print_r($tablica3);
        echo "<br>";
        //wypisanie tablicy za pomocą pętli for
        for ($i=0;$i<3;$i++){
            echo $tablica1[$i]."<br>";
        }
        echo "<br>";
        //wypisanie tablicy za pomocą while
        $k=0;
        while($k<4){
            echo $tablica2[$k]."<br>";
            $k++;
        }
        echo "<br>";
        //wypisanie tablicy za pomocą pętli do ... while
        $y=0;
        do{
            echo $tablica2[$y]."<br>";
            $y++;
        } while($y<4);
        //wypisanie tablicy asocjacyjnej za pomocą pętli foreach
        foreach($tablica3 as $d=>$s){
            echo "Klucz ".$d." ma wartosc ".$s."<br>";
        }
        //funkcja warunkowa
        //wypisanie dzielników liczby 32
        for($r=1;$r<=32;$r++){
            if(32%$r==0){
                echo "Dzielnik liczby 32 to: ".$r."<br>";
            }
        }
    ?>
</body>
</html>
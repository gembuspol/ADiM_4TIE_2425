<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zajęcia 3</title>
</head>
<body>
    <?php
        // Pętla for
        // Pętla po kolejnych elementach od -7 do 13
        for($i=-7;$i<=13;$i++){
            echo $i."<br>";
        }
        echo "<h2>Druga pętla</h2>";
        // Pętla która po przejściu pętli zmniejsza wartość zmiennej o -3, zakres pętli od 20 do -1
        for($k=20;$k>=-1;$k=$k-3){
            echo $k."<br>";
        }
        echo "<h1>Pętla while</h1>";
        // Pętla while podajemy warunek pętli, nie określamy w składni pętli jak ma się zmieniać. Wykorzystujemy ją w momencie gdy nie wiemy dokładnie ile razy ma się wykonać pętla
        //wykonuj pętle aż liczba będzie równa 0
        $r=20;
        while($r!==0){
            $r--;
            echo "<br> Nie jestem zerem";
        }
        echo "<h2>Druga pętla</h2>";
        //wypisanie liczb nieparzystych od 5 do 21
        $w=5;
        while($w<=21){
            echo $w."<br>";
            $w=$w+2;
        }
    ?>
</body>
</html>
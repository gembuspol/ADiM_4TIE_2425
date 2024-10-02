<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętla do ... while</title>
</head>
<body>
    <header>
        <h1>Pętla do ... while</h1>
    </header>
    <main>
        <!-- Pętla do while - wykonuje najpierw wykonuje działania a potem sprawdza warunek pętli -->
         <h2>Pętla do ... while</h2>
         <?php
            $liczba=10;
            do{
                echo $liczba.'<BR>';
                $liczba++;
            }while($liczba<10);
         ?>
         <h2> Pętla while</h2>
         <?php
            $liczba=10;
            while($liczba<10){
                echo $liczba.'<BR>';
                $liczba++;
            }
         ?>
         <h2>Pętla for</h2>
         <?php
            $liczba=10;
            for($liczba;$liczba<10;$liczba++){
                echo $liczba.'<BR>';
            }
         ?>
    </main>
</body>
</html>
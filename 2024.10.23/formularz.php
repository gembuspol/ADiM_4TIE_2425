<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynik formularza</title>
</head>
<body>
    <main>
        <?php
            if($_SERVER['REQUEST_METHOD']=="POST"){
                if(empty($_POST['liczba1'])||empty($_POST['liczba2'])){
                    echo "Brak podanych liczb";
                }else{
                    $pole=$_POST['liczba1']*$_POST['liczba2'];
                    $obwod=2*$_POST['liczba1']+2*$_POST['liczba2'];
                    echo "Pole prostokąta: ".$pole."<br>";
                    echo "Obwód prostokąta to: ".$obwod."<br>";
                    if($pole>15){
                        echo "Pole jest większe od 15";
                    }else{
                        echo "Pole jest mniejsze bądź równe 15";
                    }
                }
            }
        ?>
    </main>
</body>
</html>
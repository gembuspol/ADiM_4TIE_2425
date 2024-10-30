<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz i pętle</title>
</head>
<body>
    <main>
        <form action="index.php" method="POST">
            <label for="liczba1">Podaj 1 liczbę</label><input type="number" id="liczba1" name="liczba1">
            <br>
            <label for="liczba2">Podaj 2 liczbę</label><input type="number" id="liczba2" name="liczba2">
            <br>
            <input type="reset" value="RESET">
            <input type="submit" value="Wyslij">
        </form>
    </main>
    <section id="wyniki">
        <?php
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $liczba1=$_POST['liczba1'];
                $liczba2=$_POST['liczba2'];
                if($liczba1<$liczba2){
                    echo "Kolejność rosnąca<br>";
                    for($i=$liczba1;$i<=$liczba2;$i++){
                        echo "Liczba: ".$i."<br>";
                    }
                }else{
                    if($liczba1==$liczba2){
                    echo "Liczby są równe";
                    }else{
                        echo "Kolejność malejąca<br>";
                        for($i=$liczba1;$i>=$liczba2;$i--){
                            echo "Liczba: ".$i."<br>";
                        }
                    }
                }
                
            }else{
                echo "nie przesłano danych";
            }
        ?>
    </section>
</body>
</html>
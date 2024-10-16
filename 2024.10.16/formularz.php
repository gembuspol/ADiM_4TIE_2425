<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>
<body>
    <main>
        <?php
        if ($_SERVER['REQUEST_METHOD']=='GET'){
            echo "Mamy dane!<BR>";
            if(empty($_GET['pilkarz'])){
                echo "Nie podano piłkarza";
            }else{
                echo "Podano piłkarza o nazwie: ".$_GET['pilkarz'];
            }
            if(empty($_GET['narodowosc'])){
                echo "Nie podano narodowości";
            }else{
                echo "Narodowość piłkarza to: ".$_GET['narodowosc'];
            }
        }else{
            echo "Brak danych";
        }
        ?>
    </main>
</body>
</html>
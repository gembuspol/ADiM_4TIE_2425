<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=Wyloguj, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h2>Strona wylogowania</h2>
        <?php
            if(isset($_SESSION['zalogowany'])){
                if($_SESSION['zalogowany']){
                    echo "Jesteś zalogowany";
                }else{
                    echo "Nie jesteś zalogowany";
                }
            }
            ?>
            <form method="POST">
                <label>Czy chcesz się wylogować?</label><br>
                <input type="radio" name="wybor" value="tak"><label>Tak</label>
                <br>
                <input type="radio" name="wybor" value="nie"><label>Nie</label>
                <br>
                <input type="submit" value="Wyślij">
            </form>
            <?php
            if($_SERVER['REQUEST_METHOD']=="POST"){
                if(empty($_POST['wybor'])){
                    echo "brak wyboru";
                }else{
                    if($_POST['wybor']=="tak"){
                        session_unset();
                        session_destroy();
                    }
                }
            }
            ?>
            <p>Link do strony głównej<a href="index.php">Strona</a></p>
    </main>
</body>
</html>
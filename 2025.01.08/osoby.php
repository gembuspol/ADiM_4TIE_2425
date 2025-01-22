<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wyświetlenie zleceń po osobach</title>
</head>
<body>
    <header>Wyświetlanie zleceń według osób</header>
    <main>
        <!-- odbieranie danych z formularza -->
         <?php
            if($_SERVER["REQUEST_METHOD"]="POST"){
                echo "wysłali do nas!";
            }
         ?>
    </main>
    
</body>
</html>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zajęcia2</title>
</head>
<body>
    <!-- tworzenie tablic -z wykorzystaniem [] lub z funkcją array -->
     <?php
     $sigma=["Maks","Zuzia","Kuba","Kuba","Noel","Aleks"];
    //  wypisanie całej tablicy
    print_r($sigma);
    //wypisanie 3 elementu
    echo $sigma[2];
    echo "<br>";
    //tablica asoscjacyjna
    //deklaracja za pomocą wpisywania
    $test['imie']='Kamil';
    $test['nazwisko']='Nowak';
    $test['wiek']='18';
    print_r($test);
    //wypisanie tylko jednej wartość
    echo '<br>'.$test['imie'];

    echo "<br>";
    //tablica dwuwymiarowa
    $dwuwymiar[0][0]=1;
    $dwuwymiar[0][1]=2;
    $dwuwymiar[0][2]=3;
    $dwuwymiar[1][0]=4;
    $dwuwymiar[1][1]=5;
    $dwuwymiar[1][2]=6;
    $dwuwymiar[2][0]=7;
    $dwuwymiar[2][1]=8;
    $dwuwymiar[2][2]=9;
    print_r($dwuwymiar);

    // pętla for - wykorzystujemy do powtarania czynności, która ma wykonać się określoną ilość razy
    for($i=0;$i<6;$i++){
        echo '<br>'.$sigma[$i];
    }
     ?>
    
    
</body>
</html>
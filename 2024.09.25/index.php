<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętla Switch</title>
</head>
<body>
    <header>
        Petla switch
    </header>
    <main>
        <!-- Pętla switch pozwala na wykonanie jakiś instrukcji, które są zgodne z określonym warunkiem. Pętla ta może mieć wiele różnych możliwości do spełnienia np. gdy do pętli podamy 1 to otrzymy ocenę niedostateczną, a jeżeli podamy 5 to otrzymamy ocenę bardzo dobrą -->
         <?php
            // tworzymy pętlę switch która po podaniu numeru poda nam który to jest dzień tygodnia - numer będziemy zapisywać w zmiennej 
            $zmienna=1;
            switch ($zmienna){
                case 1:
                    echo "To jest poniedziałek";
                    //słowo kluczowe break; przerywa działanie pętli - pętla nie będzie dalej sprawdzać warunków
                    break;
                case 2:
                    echo "To jest wtorek";
                    break;
                case 3:
                    echo "To jest środa";
                    break;
                case 4:
                    echo "To jest czwartek";
                    break;                    
                case 5:
                    echo "To jest piatek";
                    break;   
                case 6:
                    echo "To jest sobota";
                    break;                    
                case 7:
                    echo "To jest niedziela";
                    break;        
                // klauzula deafult okresla co się stanie gdy nie zostanie znaleziony odpowiedni warunek w case - domyślna akcja gdy nie został spełniony żaden warunek
                default:
                    echo "podałes błędną liczbę";
                    break;
            }
         ?>
    </main>
</body>
</html>
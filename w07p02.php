<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $jsonDane = '{
                    "tablica": 
                    [
                      {"nazwa": "jabłko", "ilosc": 3}, 
                      {"nazwa": "banan", "ilosc": 5}, 
                      {"nazwa": "śliwka", "ilosc": 2}
                    ]
                }';
    $tablica = json_decode($jsonDane, true);
    // Teraz $tablica zawiera tablicę obiektów
    // echo $tablica[0]->nazwa; // Wyświetli "jabłko"
    // echo $tablica[1]->ilosc; // Wyświetli 5
    echo '<pre>';
    echo print_r($tablica);
    echo '</pre>';
    ?>
</body>

</html>
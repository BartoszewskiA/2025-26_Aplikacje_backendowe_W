<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Tablica wielowymiarowa
    $wielowymiarowaTablica = array(
        "owoce" => array("jabłko", "banan", "śliwka"),
        "warzywa" => array("marchew", "ziemniak", "pomidor")
    );
    // Ścieżka do pliku, do którego chcemy zapisać dane
    $filePath = 'data.json';
    // Zapisz tablicę wielowymiarową do pliku w formie JSON
    file_put_contents($filePath, json_encode($wielowymiarowaTablica));

    ?>
</body>

</html>
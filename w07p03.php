<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $url = 'http://api.nbp.pl/api/exchangerates/rates/a/eur?format=json';
    $plikJSON = file_get_contents($url);
    $tablicaDanych = json_decode($plikJSON); // dane będą przetwarzane jako tablica obiekt
    $kurs = $tablicaDanych->rates[0]->mid;
    $data = $tablicaDanych->rates[0]->effectiveDate;
    echo "<p>Kurs euro z dnia: $data wynosi: $kurs PLN</p>";
    ?>
</body>

</html>
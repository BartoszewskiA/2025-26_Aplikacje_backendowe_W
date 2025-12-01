<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Ścieżka do pliku JSON
    $filePath = 'data.json';
    // Odczytaj zawartość pliku JSON
    $jsonData = file_get_contents($filePath);
    // Zdekoduj dane JSON do postaci tablicy asocjacyjnej
    $dataArray = json_decode($jsonData, true);
    // Sprawdź, czy udało się zdekodować dane
    if ($dataArray !== null) {
        // Wyświetl dane w postaci tabeli HTML
        echo '<table border="1">';
        echo '<tr><th>Kategoria</th><th>Elementy</th></tr>';
        // foreach ($dataArray as $category => $items) {
        //     echo '<tr>';
        //     echo '<td>' . htmlspecialchars($category) . '</td>';
        //     echo '<td>' . implode(', ', array_map('htmlspecialchars', $items)) . '</td>';
        //     echo '</tr>';
        // }


        foreach ($dataArray as $category => $items) {
            echo '<tr>';
            echo '<td>' . $category . '</td>';
            echo '<td>' . implode(', ', $items) . '</td>';
            echo '</tr>';
        }
        // foreach ($dataArray as $category => $items) {
        //     echo "<tr>\n";
        //     echo "<td>\n";
        //     echo $category;
        //     echo "</td>\n";
        //     echo "<td>\n";
        //     foreach ($items as $i => $item) {
        //         echo $item;
        //         if ($i < count($items)-1)
        //             echo ", ";
        //     }
        // }

        echo '</table>';
    } else {
        echo 'Błąd dekodowania danych JSON';
    }
    ?>

</body>

</html>
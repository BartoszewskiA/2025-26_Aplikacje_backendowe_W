<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <title></title>
</head>

<body>
    <?php
    $tab = array(
        "imie" => "Artur",
        "nazwisko" => "Nowak",
        "wiek" => 30
    );
    echo "<ul>\n";
    foreach ($tab as $klucz => $wartosc) {
        echo "<li>$klucz: $wartosc</li>\n";
    }
    echo "</ul>\n";
    ?>
</body>

</html>
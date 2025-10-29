<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Dane z formularza</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] != "POST") {
        echo "<p>Błędne wywołanie strony. Proszę wypełnić formularz.</p>";
        exit();
    }
    if(!isset($_POST['imie']))
    {
        echo "<p>Brak danych w formularzu. Proszę wypełnić formularz.</p>";
        exit();
    }


    $imie = $_POST['imie'];
    $email = $_POST['email'];
    $opcja = $_POST['opcja'];
    echo "<p>Imię: $imie</p>";
    echo "<p>Email: $email</p>";    
    echo "<p>Wybrana opcja: $opcja</p>";
    ?>
</body>
</html>
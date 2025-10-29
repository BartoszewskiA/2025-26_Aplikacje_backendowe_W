<!DOCTYPE html>
<?php
$ile_elementow = 0;
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    if ($ile_elementow > 0) {
        echo "<h2>Lista elementów</h2>\n";

        echo "<ul>\n";
        for ($i = 1; $i <= $ile_elementow; $i++) {
            echo "<li>Element numer $i</li>\n";
        }
        echo "</ul>\n";
    }
    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (isset($_POST['del']))
    $_SESSION['licznik'] = 0;

if (isset($_SESSION['licznik']))
    $_SESSION['licznik']++;
else
    $_SESSION['licznik'] = 1;
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <?php
        echo $_SESSION['licznik'];
        ?>
    </h1>
    <br><br>
    <form method="post">
        <input type="hidden" name="del" value="true" />
        <input type="submit" value="Zeruj licznik" />
    </form>
</body>

</html>